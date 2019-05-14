<a id="workshops" class="anchor"></a>
<div id="workshops-outer" class="container text-grey-darker py-12 md:py-16">
    <h3 class="pre-title">Learn by doing</h3>
    <h2 class="title">Featured Workshops</h2>

    @include('_partials._workshop', ['instructor' => $page->speakers['mathias-verraes']])
    <hr class="border-t border-grey-lighter my-6">
    @include('_partials._workshop', ['instructor' => $page->speakers['matthias-noback']])
    <hr class="border-t border-grey-lighter my-6">
    @include('_partials._workshop', ['instructor' => $page->speakers['bram-van-damme']])

    <div class="title-sm mt-12 italic">More coming soon...</div>
</div>
