<div>
    <form action="#">
        <label for="title" class="mb-1 inline-block">Title</label>
        <input type="text" name="title" id="title" class="border-2 rounded-lg w-full p-2" wire:model="state.title">

        @error('state.title')
            <div class="text-red-500 text-sm mt-2">
                {{ $message }}
            </div>
        @enderror

        <div class="mt-6 flex justify-between">
            <div></div>
            <button wire:click.prevent="submit">Next</button>
        </div>
    </form>
</div>
