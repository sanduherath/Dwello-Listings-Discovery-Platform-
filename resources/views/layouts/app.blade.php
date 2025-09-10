<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>@yield('title', 'Dwello')</title>
    @vite(['resources/css/app.css'])
    <!-- optional fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-white text-gray-800 antialiased">
    {{-- Navbar component --}}
    @include('components.navbar')

    <main class="pt-24 bg-cream"> {{-- pt-24 to avoid fixed header overlap --}}
        @yield('content')
    </main>

    {{-- put scripts at bottom --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @stack('scripts')
</body>

</html>
