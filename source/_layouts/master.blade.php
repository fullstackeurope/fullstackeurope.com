<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Full Stack Europe</title>

    @include('_layouts._meta')
    @include('_layouts._favicons')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body class="font-noway h-full bg-background {{ $bodyClass ?? '' }}">
    <div class="bg-white">
        @include('_layouts.header')

        @yield('body')

        @include('_partials.newsletter')
        @include('_layouts.footer')
    </div>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
</body>
</html>
