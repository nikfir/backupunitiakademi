<!DOCTYPE html>
<html id="htmltag" lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">

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

    <body class="bg-body-l dark:bg-body-d transition duration-300 font-sans antialiased flex justify-center">
        
        <x-frontend.header/>

        <x-frontend.nav/>

        <x-frontend.sub-nav/>
        
        <x-frontend.main>
            {{ $slot }}
        </x-frontend.main>
    
        @stack('modals')

        @livewireScripts

    </body>

</html>

<script>


</script>

