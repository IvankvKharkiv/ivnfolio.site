<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="#" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/appscss.css') }}">

        @livewireStyles

        <!-- Scripts -->
         <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>

        {{-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> --}}
    </head>

    <body class="font-sans bg-gray-900 text-gray-100">
        <div class="min-h-screen">
            <x-layouts.header.mainmenu />
            <!-- Page Heading -->
            <header class="pl-10 pr-10 py-5">
                <div class="bg-gray-600 pl-10 rounded-lg">
                    <div class="text-gray-100 shadow font-semibold text-xl py-1">
                        {{ $header }}
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        {{-- livewirescript mistake is to be resolved later right now it is resolved with line above --}}
        {{-- <script src="{{ asset('/vendor/livewire/livewire.js?id=1206b80829f080e0a454') }}" data-turbolinks-eval="false"></script> --}}

        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
