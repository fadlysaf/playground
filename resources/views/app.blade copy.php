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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>

    @if (isset($pageCSS))
        <link rel="stylesheet" href="{{ asset($pageCSS) }}">
    @endif

    @if ($showOCBC)
        <link rel="stylesheet" href="{{ asset('assets/component-ocbc/style.css') }}">
    @endif

    @stack('style')
</head>

<body>

    @if ($partialsFolder)
        <!-- Include Header Component -->
        @php
            $defaultHeader = ($partialsFolder === 'partials-ocbc') ? 'header-transparent' : 'header';
            $headerName = $headerType ?? ($header ?? $defaultHeader);
        @endphp
        @if ($headerName !== 'none')
            @include($partialsFolder . '.' . $headerName)
        @endif
    @endif

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    @if ($partialsFolder)
        <!-- Include Footer Component -->
        @php
            $footerName = $footerType ?? ($footer ?? 'footer');
        @endphp
        @if ($footerName !== 'none')
            @include($partialsFolder . '.' . $footerName)
        @endif
    @endif

    @stack('script')
</body>

</html>
