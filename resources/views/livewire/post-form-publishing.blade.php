<div>
    <form action="#">
        <div class="flex items-center">
            <input type="checkbox" name="published" id="published" class="mr-2" wire:model="state.published">
            <label for="published" class="inline-block">Published</label>
        </div>

        <div class="mt-6 flex justify-between">
            <a href="#" wire:click.prevent="$emit('goToStep', 2)">Previous</a>
            <button wire:click.prevent="submit">Save</button>
        </div>
    </form>
</div>
