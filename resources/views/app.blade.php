@php
    $showOCBC = ((isset($isOCBC) && $isOCBC)
                || request()->is('*ocbc*')
                || request()->is('*kartuliburan*')
                || View::hasSection('isOCBC'))
                && !(isset($noOCBC) && $noOCBC)
                && !View::hasSection('noOCBC');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @if (isset($pageCSS))
        <link rel="stylesheet" href="{{ asset($pageCSS) }}">
    @endif

    @if ($showOCBC)
        <link rel="stylesheet" href="{{ asset('assets/component-ocbc/style.css') }}">
    @endif

    @stack('style')
</head>

<body>

    @if ($showOCBC)
        <!-- Include Header Component -->
        @include('partials-ocbc.header')
    @endif

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    @if ($showOCBC)
        <!-- Include Footer Component -->
        @include('partials-ocbc.footer')
    @endif

    @stack('script')
</body>

</html>

