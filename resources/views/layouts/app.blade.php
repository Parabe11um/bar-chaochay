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
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/unicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/urbanist.css') }}">
    <link rel="stylesheet" href="{{ asset('css/yellow.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @livewireStyles
</head>

<body class="font-sans antialiased">
<x-banner />

@include('layouts.partials.header')

@yield('hero')

{{--<main class="container mx-auto px-5 flex flex-grow">--}}
    {{ $slot }}
{{--</main>--}}

@include('layouts.partials.footer')

@stack('modals')
@livewireScripts
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>
@stack('scripts')

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('typeEffect', (text, speed = 50) => ({
            full: text,
            output: '',
            index: 0,
            startTyping() {
                this.output = '';
                this.index = 0;
                const step = () => {
                    if (this.index < this.full.length) {
                        this.output += this.full[this.index++];
                        setTimeout(step, speed);
                    }
                };
                step();
            }
        }));
    });
</script>
</body>
</html>
