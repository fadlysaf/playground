<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title : 'Default Title' }}</title>
    @if (isset($pageCSS))
        <link rel="stylesheet" href="{{ asset($pageCSS) }}">
    @endif

    @stack('style')
</head>

<body>
    @yield('content')
</body>
@stack('script')

</html>
