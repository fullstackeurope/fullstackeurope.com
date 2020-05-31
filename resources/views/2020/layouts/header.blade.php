<div id="header" data-scroll-header class="z-10 w-full text-white font-noway-medium py-8 text-base">
    <div class="container mx-auto px-4">
        <div class="lg:flex">
            <div class="lg:flex-initial">
                <a href="{{ route('home', $edition) }}">
                    <img src="{{ asset('images/2020/logo.svg') }}" width="150" alt="{{ config('app.name') }}">
                </a>
                <span class="lg:hidden">
                    <a id="show-nav" class="show-nav text-white text-2xl absolute top-0 right-0 mt-10 mr-6" href="javascript:;">
                        <i class="fas fa-bars"></i>
                    </a>
                    <a id="hide-nav" class="text-white text-2xl absolute top-0 right-0 mt-10 mr-6 hidden" href="javascript:;">
                        <i class="far fa-times-circle"></i>
                    </a>
                </span>
            </div>

            @include('2020.layouts.navigation')
        </div>
    </div>
</div>