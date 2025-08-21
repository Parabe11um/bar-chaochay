<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if (app()->environment('production'))
        <!-- Яндекс Вебмастер -->
        <meta name="yandex-verification" content="{{ env('YANDEX_VERIFICATION') }}" />

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                m[i].l=1*new Date();
                for (var j = 0; j < document.scripts.length; j++) {
                    if (document.scripts[j].src === r) { return; }
                }
                k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym({{ env('YANDEX_METRIKA_ID', '103285023') }}, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
            });
        </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/{{ env('YANDEX_METRIKA_ID', '103285023') }}" style="position:absolute; left:-9999px;" alt="" /></div>
        </noscript>
        <!-- /Yandex.Metrika counter -->
    @endif

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('/images/favicon.png') }}" type="image/png">

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

{{ $slot }}

@include('layouts.partials.footer')

@stack('modals')
@livewireScripts
<script>
    document.addEventListener('livewire:init', () => console.log('✅ Livewire готов'));
</script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>
@stack('scripts')

</body>
</html>
