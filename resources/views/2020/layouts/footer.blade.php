<div id="footer" class="text-sm text-white">
    <div class="footer-top leading-normal bg-background-secondary">
        <div class="container mx-auto px-4 pt-16 pb-8">
            <div class="md:flex md:mb-4">
                <div class="md:w-1/3 mb-10 md:mb-0">
                    <img src="{{ asset('images/2020/logo.svg') }}" class="mb-4 md:mb-6" width="150" alt="{{ config('app.name') }}"><br>
                    7, 8 & 9 October 2020 - {{ config('settings.2020.venue') }}
                </div>
                <div class="md:w-2/3 md:text-right">
                    <ul class="list-reset">
                        <li class="md:ml-6 md:inline-block mb-4">
                            <a data-scroll href="{{ route('home', $edition) }}#speakers">speakers</a>
                        </li>
                        <li data-scroll class="md:ml-6 md:inline-block mb-4">
                            <a href="{{ route('home', $edition) }}#venue">venue</a>
                        </li>
                        <li data-scroll class="md:ml-6 md:inline-block mb-4">
                            <a href="{{ route('home', $edition) }}#sponsors">sponsors</a>
                        </li>
                        <li class="md:ml-6 md:inline-block mb-4">
                            <a data-scroll href="{{ route('home', $edition) }}#newsletter">newsletter</a>
                        </li>
                        <li class="md:ml-6 md:inline-block mb-4">
                            <a href="{{ route('diversity', $edition) }}">diversity</a>
                        </li>
                        <li class="md:ml-6 md:inline-block mb-4">
                            <a href="{{ route('code-of-conduct', $edition) }}">code of conduct</a>
                        </li>
                        <li class="md:ml-6 md:inline-block mb-4">
                            <a href="{{ route('home', $edition) }}#2019-edition">2019</a>
                        </li>
                        <li class="md:ml-6 md:inline-block">
                            <a href="{{ config('settings.2020.tickets_url') }}" target="_blank">tickets</a>
                        </li>
                    </ul>
                    <div class="text-center md:text-right pin-b pin-r mt-10">
                        Need help?<br>
                        +32 468 109891 |
                        <a href="mailto:hello@fullstackeurope.com">hello@fullstackeurope.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-background leading-loose text-center">
        <div class="container mx-auto px-4 py-8">
            <div class="md:flex">
                <div class="md:w-3/4 md:text-left">
                    &copy; {{ config('app.name') }}
                    <span class="hidden md:inline-block">|</span>
                    <span class="md:hidden"><br></span>
                    Design by <a href="https://janvanechelpoel.be">Jan Van Echelpoel</a>
                    <span class="hidden md:inline-block">|</span>
                    <span class="md:hidden"><br></span>
                    Event management by <a href="https://on3.events">On 3 Events</a>
                </div>
                <div class="md:w-1/4 md:text-right text-lg">
                    @include('2020.layouts.social')
                </div>
            </div>
        </div>
    </div>
</div>
