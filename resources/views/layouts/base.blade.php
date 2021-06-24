<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ $edition->pageTitle($pageTitle ?? '') }}</title>

    @include('layouts.meta')
    @include('layouts.favicons')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset(mix("app.css", "assets/{$edition->year}")) }}">

    @production
        <!-- Fathom - beautiful, simple website analytics -->
        <script src="https://boom.laravel.io/script.js" data-site="ZTTSULOQ" defer></script>
        <!-- / Fathom -->
    @endproduction
</head>
<body class="{{ $bodyClass ?? '' }}">

@yield('body')

<script src="{{ mix("app.js", "assets/{$edition->year}") }}"></script>
</body>
</html>
