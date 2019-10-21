<div id="header" data-scroll-header class="z-10 w-full text-white font-noway-medium py-8 text-base">
    <div class="container mx-auto">
        <div class="lg:flex">
            <div class="lg:flex-initial">
                <a href="{{ $page->baseUrl }}"><img src="{{ $page->baseUrl }}assets/images/logo.svg" width="150" alt="Full Stack Europe"></a>
                <span class="lg:hidden">
                    <a id="show-nav" class="show-nav text-white text-2xl float-right mt-2" href="javascript:;">
                        <i class="fas fa-bars"></i>
                    </a>
                    <a id="hide-nav" class="text-white text-2xl float-right mt-2 hidden" href="javascript:;">
                        <i class="far fa-times-circle"></i>
                    </a>
                </span>
            </div>

            @include('_layouts.navigation')
        </div>
    </div>
</div>
