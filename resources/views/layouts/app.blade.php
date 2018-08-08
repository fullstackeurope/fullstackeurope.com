<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123645073-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-123645073-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/images/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <!-- HTML Meta Tags -->
    <title>Full Stack Europe - A conference coming to Antwerp, Belgium in 2019</title>
    <meta name="description" content="Full Stack Europe is a conference for every kind of developer. First edition coming in 2019.">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Full Stack Europe - A conference coming to Antwerp, Belgium in 2019">
    <meta itemprop="description" content="Full Stack Europe is a conference for every kind of developer. First edition coming in 2019.">
    <meta itemprop="image" content="https://fullstackeurope.com/images/ogimage.png">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://fullstackeurope.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Full Stack Europe - A conference coming to Antwerp, Belgium in 2019">
    <meta property="og:description" content="Full Stack Europe is a conference for every kind of developer. First edition coming in 2019.">
    <meta property="og:image" content="https://fullstackeurope.com/images/ogimage.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Full Stack Europe - A conference coming to Antwerp, Belgium in 2019">
    <meta name="twitter:description" content="Full Stack Europe is a conference for every kind of developer. First edition coming in 2019.">
    <meta name="twitter:image" content="https://fullstackeurope.com/images/ogimage.png">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
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
                <a href="https://twitter.com/fullstackeurope">Twitter</a> /
                <a href="mailto:hello@fullstackeurope.com">Contact</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
