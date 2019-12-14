<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    @if ($page->production)
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-123645073-1', 'auto', {'allowLinker': true});
            ga('require', 'linker');
            ga('linker:autoLink', ['fullstackeurope.com', 'ti.to']);
            ga('send', 'pageview');
        </script>
    @endif

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ isset($pageTitle) ? "$pageTitle - " : '' }} Full Stack Europe 2020{{ ! isset($pageTitle) ? ' - The International Full Stack Conference' : '' }}</title>

    @include('2020._layouts._meta')
    @include('2020._layouts._favicons')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/main.css', '2020/assets/build') }}">
</head>
<body class="font-noway h-full bg-background {{ $bodyClass ?? '' }}">
    <div class="bg-white">
        @include('2020._layouts.header')

        @yield('body')

        @include('2020._partials.newsletter')
        @include('2020._layouts.footer')
    </div>

    <script src="{{ mix('js/main.js', '2020/assets/build') }}"></script>

    @if ($page->production)
        <script type="text/javascript">
            _linkedin_partner_id = "1228922";
            window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
            window._linkedin_data_partner_ids.push(_linkedin_partner_id);
        </script><script type="text/javascript">
            (function(){var s = document.getElementsByTagName("script")[0];
                var b = document.createElement("script");
                b.type = "text/javascript";b.async = true;
                b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
                s.parentNode.insertBefore(b, s);})();
        </script>
        <noscript>
            <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=1228922&fmt=gif" />
        </noscript>
    @endif
</body>
</html>
