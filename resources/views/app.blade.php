@php
    $showOCBC =
        ((isset($isOCBC) && $isOCBC) ||
            request()->is('*ocbc*') ||
            request()->is('*kartuliburan*') ||
            View::hasSection('isOCBC')) &&
        !(isset($noOCBC) && $noOCBC) &&
        !View::hasSection('noOCBC');

    $useTailwindV4 =
        request()->is('*mickey-nyala*') || request()->is('*disney*') || (isset($isTailwindV4) && $isTailwindV4);

    // Menentukan folder partials secara dinamis
    $partialsFolder = $partialsFolder ?? ($showOCBC ? 'partials-ocbc' : null);
@endphp
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title : 'OCBC Indonesia' }}</title>

    <!-- Google Fonts untuk font yang bersih mirip OCBC -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com" crossorigin>
    <link rel="preconnect" href="https://cdn1.ocbc.id" crossorigin>
    <link rel="preconnect" href="https://www.ocbc.id" crossorigin>
    <link rel="preconnect" href="https://www.youtube.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="dns-prefetch" href="//on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com">
    <link rel="dns-prefetch" href="//cdn1.ocbc.id">
    <link rel="dns-prefetch" href="//www.ocbc.id">
    <link rel="dns-prefetch" href="//www.youtube.com">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome & Tailwind CSS -->
    @if ($useTailwindV4)
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <!-- Tailwind CSS v4 -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @else
        <link class="a" rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- Tailwind CSS v3 untuk halaman lain -->
        <script src="https://cdn.tailwindcss.com"></script>
    @endif

    @stack('style')
</head>

<body>
    @hasSection('header')
        @yield('header')
    @elseif(isset($headerView))
        @include($headerView)
    @elseif(isset($partialsFolder) && $partialsFolder && view()->exists($partialsFolder . '.header'))
        @include($partialsFolder . '.header')
    @endif

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    @hasSection('footer')
        @yield('footer')
    @elseif(isset($footerView))
        @include($footerView)
    @elseif(isset($partialsFolder) && $partialsFolder && view()->exists($partialsFolder . '.footer'))
        @include($partialsFolder . '.footer')
    @endif

    @stack('script')
</body>

</html>
