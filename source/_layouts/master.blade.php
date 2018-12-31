<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Full Stack Europe</title>
    <meta name="description" content="Full Stack Europe is a conference for every kind of developer. First edition coming in 2019.">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
    <div class="container mx-auto">
        @yield('body')
    </div>

    {{-- Footer --}}
    <div class="footer text-sm">
        <div class="footer-top leading-normal">
            <div class="container pt-16 pb-8">
                <div class="md:flex md:mb-4">
                    <div class="md:w-1/2 mb-12 md:mb-0">
                        <img src="/assets/images/logo-white.png" class="mb-4 md:mb-6" width="150" alt="Full Stack Europe"><br>
                        2 & 3 & 4 October 2019 - Venue Antwerp
                    </div>
                    <div class="md:w-1/2 md:text-right">
                        <ul class="list-reset">
                            <li class="md:inline-block mb-4"><a href="#">speakers</a></li>
                            <li class="md:ml-6 md:inline-block mb-4"><a href="#">schedule</a></li>
                            <li class="md:ml-6 md:inline-block mb-4"><a href="#">workshops</a></li>
                            <li class="md:ml-6 md:inline-block mb-4"><a href="#">venue</a></li>
                            <li class="md:ml-6 md:inline-block mb-4"><a href="#">sponsors</a></li>
                            <li class="md:ml-6 md:inline-block mb-4"><a href="#">tickets</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom leading-normal">
            <div class="container pt-8 pb-8">
                <div class="md:flex md:mb-4">
                    <div class="md:w-3/4 mb-4 md:mb-0">
                        &copy; Full Stack Europe
                        <span class="hidden md:inline-block">|</span>
                        <span class="md:hidden"><br></span>
                        Design by <a href="https://janvanechelpoel.be">Jan Van Echelpoel</a>
                    </div>
                    <div class="md:w-1/4 md:text-right text-lg">
                        <a href="mailto:hello@fullstackeurope.com" class="mr-2">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="https://twitter.com/fullstackeu">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
