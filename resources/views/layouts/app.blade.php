<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">

            @livewire('navigation-menu')

            @include('components/sidebar')

            <div class="sm:ml-40 transition-all duration-300 ease-in-out">
                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white shadow pt-16">
                        <div class="p-2 container mx-auto">
                            {{ $header }}
                        </div>
                    </header>
                @endif
    
                <!-- Page Content -->
                <main >
                    {{ $slot }}
                </main>
            </div>
        </div>

        <div class="bg-secondary p-2 text-center text-white text-sm">
            &copy; {{ date('Y') }}. All right reserved.
        </div>

        @stack('modals')

        @yield('scripts')

        @livewireScripts
    </body>
</html>
