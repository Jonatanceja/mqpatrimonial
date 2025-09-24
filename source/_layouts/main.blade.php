<!DOCTYPE html>
<html lang="{{ $page->language ?? 'es' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Canonical -->
        <link rel="canonical" href="{{ $page->getUrl() }}">

        <!-- SEO -->
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>

        <!-- Favicon con emoji 🎓 -->
        <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🎓</text></svg>">


        <!-- Open Graph -->
        <meta property="og:type" content="website">
        <meta property="og:locale" content="{{ $page->language ?? 'es_ES' }}">
        <meta property="og:title" content="{{ $page->title }}">
        <meta property="og:description" content="{{ $page->description }}">
        <meta property="og:url" content="{{ $page->getUrl() }}">
        <meta property="og:site_name" content="MQ Patrimonial">
        <meta property="og:image" content="{{ $page->og_image ?? '/assets/images/og-image.jpg' }}">
        <meta property="og:image:alt" content="{{ $page->title }}">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $page->title }}">
        <meta name="twitter:description" content="{{ $page->description }}">
        <meta name="twitter:image" content="{{ $page->og_image ?? '/assets/images/og-image.jpg' }}">
        <meta name="twitter:image:alt" content="{{ $page->title }}">

        @viteRefresh()
        <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
        <script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

        <!-- Icons CDN (lazy load) -->
        <link rel="preload" href="https://cdn.lineicons.com/5.0/lineicons.css" as="style" onload="this.rel='stylesheet'">
        <noscript>
            <link rel="stylesheet" href="https://cdn.lineicons.com/5.0/lineicons.css">
        </noscript>
    </head>
    <body 
        class="text-gray-800 font-sans antialiased bg-[url(/assets/images/background.webp)] bg-cover bg-fixed p-5 md:p-8"
        x-data="{ openModal: false }"
    >
        @yield('body')
    </body>
</html>
