<a id="workshops" class="anchor"></a>
<div id="workshops-outer" class="container bg-white text-grey-darker py-12 md:py-16">
    <h3 class="pre-title">Learn by doing</h3>
    <h2 class="title mb-4">Featured Workshops</h2>
    <p class="text-center mb-16">Registrations: 8:30 &bull; Start: 9:30 &bull; End: 17:30</p>

    @include('_partials._workshop', ['instructor' => $page->speakers['mathias-verraes']])
    <hr class="border-t border-grey-lighter my-6">
    @include('_partials._workshop', ['instructor' => $page->speakers['matthias-noback']])
    <hr class="border-t border-grey-lighter my-6">
    @include('_partials._workshop', ['instructor' => $page->speakers['ivan-jovanovic']])
    <hr class="border-t border-grey-lighter my-6">
    @include('_partials._workshop', ['instructor' => $page->speakers['bram-van-damme']])
    <hr class="border-t border-grey-lighter my-6">
    @include('_partials._workshop', ['instructor' => $page->speakers['konstantin-kudryashov']])
</div>
