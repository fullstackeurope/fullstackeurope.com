<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials.analytics')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('layouts.partials.social')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script defer src="{{ mix('js/app.js') }}"></script>

    <!-- If you're reading this, you should definitely buy a ticket and bring all your friends! -->
</head>
<body>

<div id="top-border">&nbsp;</div>

<div id="content" class="container mx-auto bg-white">
    <div class="px-6 md:px-20 pt-20 pb-8">
        <div class="mb-16">
            <h1 class="text-5xl uppercase">Full Stack</h1>
            <h2 class="text-5xl text-grey-dark">Europe</h2>
        </div>

        {{ $slot }}

        <div id="footer" class="sm:flex leading-normal text-grey-dark">
            <div class="sm:w-1/2">
                Copyright &copy; Full Stack Europe
            </div>
            <div class="sm:w-1/2 sm:text-right">
                <a href="https://twitter.com/fullstackeu">Twitter</a> /
                <a href="mailto:hello@fullstackeurope.com">Contact</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
