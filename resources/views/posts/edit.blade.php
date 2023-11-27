<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <livewire:styles />
    </head>
    <body class="bg-gray-200">
        <div class="flex items-center p-6">
            <div class="bg-white p-4 rounded-lg w-6/12">
                <livewire:post-form :post="$post" />
            </div>
        </div>

        <livewire:scripts />
    </body>
</html>