<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('routes.categories') }}
            </h2>

            <x-buttons.addNew href="{{ route('categories.create') }}">
                <x-slot name="displayText">
                    Add New
                </x-slot>
            </x-buttons.addNew>
        </div>
    </x-slot>

    <x-page.wrapper>
        @if ($message = Session::get('success'))
            <div class="fixed right-6 z-50">
                <div x-data="{ show: false }"
                    x-init="() => {
                        setTimeout(() => show = true, 500);
                        setTimeout(() => show = false, 3000);
                    }"
                    x-show="show" 
                    x-transition:enter="transform transition ease-in-out duration-300" 
                    x-transition:enter-start="translate-x-40 opacity-0" 
                    x-transition:enter-end="translate-x-0 opacity-100" 
                    x-transition:leave="transform transition ease-in-out duration-300" 
                    x-transition:leave-start="translate-x-0 opacity-100" 
                    x-transition:leave-end="translate-x-40 opacity-0"
                    x-description="Notification panel, show/hide based on alert state." 
                    @click.away="show = false"
                    class="bg-green-500 text-white shadow-lg rounded-lg pointer-events-none">

                    <div class="rounded-lg shadow-xs overflow-hidden">
                        <div class="p-4 flex items-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-6 h-6" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm leading-5 font-medium text-white">
                                    {{ $message }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <livewire:categories.index />
    </x-page.wrapper>

</x-app-layout>