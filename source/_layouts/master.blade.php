<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    @if ($page->production)
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            gtag('js', new Date());

            ga('create', 'UA-123645073-1', 'auto', {'allowLinker': true});
            ga('require', 'linker');
            ga('linker:autoLink', ['fullstackeurope.com', 'ti.to']);
            ga('send', 'pageview');
        </script>

        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-123645073-1');
        </script>
    @endif

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ isset($pageTitle) ? "$pageTitle - " : '' }} Full Stack Europe</title>

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
