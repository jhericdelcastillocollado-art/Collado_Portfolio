<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $personal['name'] ?? 'Portfolio' }} — {{ $personal['title'] ?? 'Developer' }}</title>
    <meta name="description" content="Personal portfolio of {{ $personal['name'] ?? 'Alex Morgan' }}, a {{ $personal['title'] ?? 'Full-Stack Developer' }}.">
    <meta name="theme-color" content="#4361ee">

    <meta property="og:title" content="{{ $personal['name'] ?? 'Portfolio' }} — {{ $personal['title'] ?? 'Developer' }}">
    <meta property="og:description" content="Personal portfolio of {{ $personal['name'] ?? 'Alex Morgan' }}, a {{ $personal['title'] ?? 'Full-Stack Developer' }}.">
    <meta property="og:type" content="website">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    <script>
        (function() {
            const saved = localStorage.getItem('theme');
            if (saved === 'dark' || (!saved && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            }
        })();
    </script>
</head>
<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
