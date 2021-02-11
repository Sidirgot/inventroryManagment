<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Categories') }}
            </h2>

            <x-buttons.addNew>
                <x-slot name="displayText">
                    Add New
                </x-slot>
            </x-buttons.addNew>
        </div>
    </x-slot>

    <x-page.wrapper>
        <livewire:categories.create>
    </x-page.wrapper>
</x-app-layout>