<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script defer src="{{ mix('js/app.js') }}"></script>
</head>
<body>

<div id="top-border">&nbsp;</div>

<div id="content" class="container mx-auto h-full bg-white">
    <div class="px-6 md:px-20 py-20">
        <div class="mb-16">
            <h1 class="text-5xl uppercase">Full Stack</h1>
            <h2 class="text-5xl">Europe</h2>
        </div>

        {{ $slot }}

        <div id="footer" class="flex text-grey-dark">
            <div class="md:w-1/2">
                Copyright &copy; Full Stack Europe
            </div>
            <div class="md:w-1/2 md:text-right">
                <a href="https://twitter.com/fullstackeurope">Twitter</a> /
                <a href="mailto:hello@fullstackeurope.com">Contact</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
