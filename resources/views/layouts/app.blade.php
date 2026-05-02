<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="{{ Vite::asset('resources/images/gt-logo.png') }}" type="image/png" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="{{ env("G_KEYW", "keyword") }}">
        <meta name="description" content="{{ env("G_DESC", "Description") }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }} | @yield('page-title') </title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/theme-styles.css'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class=" font-montserrat text-black overflow-x-hidden " >


        <div>
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
            
             
            <!-- Page Content -->
            <main>
                <x-banner />
                <livewire:modal>
                <livewire:view>
               {{ $slot }}
            </main>

            <x-footer />
        </div>

        @stack('modals')
        @livewireScripts
        @stack('scripts')

    </body>
</html>
