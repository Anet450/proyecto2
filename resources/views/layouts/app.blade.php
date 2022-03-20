<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Black Moon Event</title>


        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body  style="opacity: 2;
    background-image:url(https://4.bp.blogspot.com/-QmRLItYqoEk/Wcquhc5h_AI/AAAAAAAA-qE/WzuXaE3Uuao-Q6AKaWghRBdD1CRYAD7qgCKgBGAs/s400/tumblr_static_tumblr_static__640.gif);"
    class="font-sans antialiased">
        <x-jet-banner />
        <h1 style=" 
            color: white;
            text-align:center;
            font-size: 250%;
            background: black;
            font-size: 120%;
            position: relative;
            border-bottom: 5px solid transparent;
            border-image: -webkit-linear-gradient(175deg, #ffff77 0, #fcb258 12.5%, #fff163 25%, #f8ce87 37.5%, #aa7e53 50%, #dfa44c 62.5%, #d49d60 75%, #bc7b43 87.5%, #ffffc3 100%,transparent) 50 100;"
                    >
                    <img src="https://i.pinimg.com/originals/f9/e4/aa/f9e4aabe769a9d5b635408a9a5b1fb1b.jpg" style="max-width: 10%;max-height: 10%;float: left;">
            __BLACK MOON____EVENT__
            <img src="https://i.pinimg.com/originals/f9/e4/aa/f9e4aabe769a9d5b635408a9a5b1fb1b.jpg" style="max-width: 10%;max-height: 10%;top: 5%;float: right;">        
        </h1>

        <div class="min-h-screen bg-gray-100">
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
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
