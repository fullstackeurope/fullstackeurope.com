<a id="speakers" class="anchor-speakers"></a>
<div id="speakers-outer" class="bg-white mb-12 md:mb-0" style="background: url('/assets/images/pattern.png') repeat top left">
    <div class="container mx-auto bg-white md:px-0">
        <div id="speakers-inner" class="bg-white pt-10 md:pt-20 -mt-20">
            <h3 class="pre-title">Meet our speakers</h3>
            <h2 class="title">Featuring talks from</h2>
            <div class="md:flex md:px-4 lg:px-8 xl:px-10">
                @include('_partials._speaker', ['speaker' => $page->speakers['caleb-porzio']])
                @include('_partials._speaker', ['speaker' => $page->speakers['sara-soueidan']])
                @include('_partials._speaker', ['speaker' => $page->speakers['tim-neutkens']])
            </div>
            <div class="md:flex md:px-4 lg:px-8 xl:px-10">
                @include('_partials._speaker', ['speaker' => $page->speakers['konstantin-kudryashov']])
                @include('_partials._speaker', ['speaker' => $page->speakers['jeremy-keith']])
                @include('_partials._speaker', ['speaker' => $page->speakers['kadi-kraman']])
            </div>
            <div class="md:flex md:px-4 lg:px-8 xl:px-10">
                @include('_partials._speaker', ['speaker' => $page->speakers['matthias-noback']])
                @include('_partials._speaker', ['speaker' => $page->speakers['gabi-davila']])
                @include('_partials._speaker', ['speaker' => $page->speakers['indu-alagarsamy']])
            </div>
            <div class="md:flex md:px-4 lg:px-8 xl:px-10">
                @include('_partials._speaker', ['speaker' => $page->speakers['nataliya-remez']])
                @include('_partials._speaker', ['speaker' => $page->speakers['rik-van-bruggen']])
                @include('_partials._speaker', ['speaker' => $page->speakers['thijs-feryn']])
            </div>
            <div class="md:flex md:px-4 lg:px-8 xl:px-10">
                @include('_partials._speaker', ['speaker' => $page->speakers['mattias-geniar']])
                @include('_partials._speaker', ['speaker' => $page->speakers['susanna-wong']])
                @include('_partials._speaker', ['speaker' => $page->speakers['joost-lubach']])
            </div>
            <div class="title-sm mt-12 italic">More coming soon...</div>
        </div>
    </div>
</div>
