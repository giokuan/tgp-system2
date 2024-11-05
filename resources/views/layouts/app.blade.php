<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">
    <x-banner />

    <!-- Main Content Wrapper with Background and Overlay -->
    <div class="relative min-h-screen bg-gray-100">
        
        <!-- Background Image Layer -->
        <div class=" inset-0 bg-cover bg-center fixed" style="background-image: url('{{ asset('storage/logo/bricks.webp') }}');"></div>
        
        <!-- Overlay Layer -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Foreground Content -->
        <div class="relative z-10">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="backdrop-blur-md bg-white/30 shadow -z-20">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>

    @stack('modals')
    @livewireScripts
</body>
</html>
