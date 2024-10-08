<!-- Delete Record -->
<x-modal.confirmation wire:model.defer="showDeleteModal">
    <x-slot name="title">Delete Entry</x-slot>
    <x-slot name="content">
        <div class="py-8 text-cool-gray-700 ">Are you sure you? This action is irreversible.</div>
    </x-slot>
    <x-slot name="footer">
        <div class="gap-5">
            <x-button.cancel wire:click.prevent="$set('showDeleteModal', false)">Cancel</x-button.cancel>

            <x-button.danger wire:click.prevent="trashData">Delete</x-button.danger>
        </div>
    </x-slot>
</x-modal.confirmation>
