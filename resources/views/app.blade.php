@php
    $showOCBC =
        ((isset($isOCBC) && $isOCBC) ||
            request()->is('*ocbc*') ||
            request()->is('*kartuliburan*') ||
            View::hasSection('isOCBC')) &&
        !(isset($noOCBC) && $noOCBC) &&
        !View::hasSection('noOCBC');

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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome untuk Ikon -->
    @if (request()->is('*mickey-nyala*'))
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <!-- Tailwind CSS v4 untuk OCBC Outlook (match index.html) -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @else
        <link class="a" rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- Tailwind CSS v3 untuk halaman lain -->
        <script src="https://cdn.tailwindcss.com"></script>
    @endif


    @if (isset($pageCSS))
        <link rel="stylesheet" href="{{ asset($pageCSS) }}">
    @endif

    @if ($showOCBC)
        <link rel="stylesheet" href="{{ asset('assets/component-ocbc/style.css') }}">
    @endif

    @stack('style')
</head>

<body>
    @include('mickey-nyala-platinum.header')
    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    @stack('script')

    @include('mickey-nyala-platinum.footer')
</body>

</html>
