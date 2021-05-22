<div id="footer" class="text-sm text-white">
    <div class="footer-top leading-normal bg-background-secondary">
        <div class="container mx-auto px-4 pt-16 pb-8">
            <div class="md:flex md:mb-4">
                <div class="md:w-1/3 mb-10 md:mb-0">
                    <img src="{{ asset('2022/images/logo.svg') }}" class="mb-4 md:mb-6" width="150" alt="{{ config('app.name') }}"><br>
                    5, 6 & 7 October 2022 - {{ $edition->venue }}
                </div>
                <div class="md:w-2/3 md:text-right">
                    <ul class="list-reset">
                        @if ($edition->publish_schedule)
                            <li class="md:ml-6 md:inline-block mt-4">
                                <a data-scroll href="{{ route('home', $edition) }}#schedule">schedule</a>
                            </li>
                        @endif

{{--                        <li class="md:ml-6 md:inline-block mt-4">--}}
{{--                            <a data-scroll href="{{ route('home', $edition) }}#speakers">speakers</a>--}}
{{--                        </li>--}}

                        @if ($edition->venue)
                            <li class="md:ml-6 md:inline-block mt-4">
                                <a data-scroll href="{{ route('home', $edition) }}#venue">venue</a>
                            </li>
                        @endif

                        <li class="md:ml-6 md:inline-block mt-4">
                            <a data-scroll href="{{ route('home', $edition) }}#sponsors">sponsors</a>
                        </li>
                        <li class="md:ml-6 md:inline-block mt-4">
                            <a data-scroll href="{{ route('home', $edition) }}#newsletter">newsletter</a>
                        </li>
                        <li class="md:ml-6 md:inline-block mt-4">
                            <a href="{{ route('diversity', $edition) }}">diversity</a>
                        </li>
                        <li class="md:ml-6 md:inline-block mt-4">
                            <a href="{{ route('code-of-conduct', $edition) }}">code of conduct</a>
                        </li>
                        <li class="md:ml-6 md:inline-block mt-4">
                            <a href="{{ route('home', 2021) }}">2021</a>
                        </li>

                        @if ($edition->tickets_url)
                            <li class="md:ml-6 md:inline-block mt-4">
                                <a href="{{ $edition->tickets_url }}" target="_blank">tickets</a>
                            </li>
                        @endif
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
                    @include('2022::layouts.social')
                </div>
            </div>
        </div>
    </div>
</div>
