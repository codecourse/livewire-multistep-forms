<div>
    <form action="#">
        <label for="body" class="mb-1 inline-block">Body</label>
        <textarea type="text" name="body" id="body" class="border-2 rounded-lg w-full p-2" wire:model="state.body"></textarea>

        @error('state.body')
            <div class="text-red-500 text-sm mt-2">
                {{ $message }}
            </div>
        @enderror

        <div class="mt-6 flex justify-between">
            <a href="#" wire:click.prevent="$emit('goToStep', 1)">Previous</a>
            <button wire:click.prevent="submit">Next</button>
        </div>
    </form>
</div>
