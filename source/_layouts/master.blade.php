<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Full Stack Europe</title>
    <meta name="description" content="Full Stack Europe is a conference for every kind of developer. First edition coming in 2019.">

    @include('_layouts.favicons')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body class="font-regular">
    @include('_layouts.header')

    @yield('body')

    @include('_partials.organisers')
    @include('_partials.newsletter')
    @include('_layouts.footer')

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
</body>
</html>
