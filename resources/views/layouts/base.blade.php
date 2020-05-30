<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ $edition->pageTitle($pageTitle ?? '') }}</title>

    @include('layouts.meta')
    @include('layouts.favicons')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="font-noway h-full bg-background {{ $bodyClass ?? '' }}">
<div class="bg-white">
{{--    @include('2020._layouts.header')--}}

    @yield('body')

{{--    @include('2020._partials.newsletter')--}}
{{--    @include('2020._layouts.footer')--}}
</div>

<script src="{{ mix('js/app.js') }}"></script>

@production
    <script>
        (function(f, a, t, h, o, m){
            a[h]=a[h]||function(){
                (a[h].q=a[h].q||[]).push(arguments)
            };
            o=f.createElement('script'),
                m=f.getElementsByTagName('script')[0];
            o.async=1; o.src=t; o.id='fathom-script';
            m.parentNode.insertBefore(o,m)
        })(document, window, 'https://cdn.usefathom.com/tracker.js', 'fathom');
        fathom('set', 'siteId', 'ZTTSULOQ');
        fathom('trackPageview');
    </script>
@endproduction

</body>
</html>
