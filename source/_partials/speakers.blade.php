<a id="speakers" class="anchor-speakers"></a>
<div id="speakers-outer" class="bg-white mb-12 md:mb-0">
    <div class="container mx-auto bg-white md:px-0">
        <div id="speakers-inner" class="bg-white pt-10 md:pt-20 -mt-20">
            <h3 class="pre-title">Meet our speakers</h3>
            <h2 class="title">Featuring talks from</h2>
            <div class="md:flex md:px-4 lg:px-8 xl:px-10">
                <div class="md:w-1/3 md:px-4 lg:px-8 xl:px-10 mb-6 md:mb-12">
                    @include('_partials._speaker', ['speaker' => $page->speakers['konstantin-kudryashov']])
                </div>
                <div class="md:w-1/3 md:px-4 lg:px-8 xl:px-10 mb-6 md:mb-12">
                    @include('_partials._speaker', ['speaker' => $page->speakers['sara-soueidan']])
                </div>
                <div class="md:w-1/3 md:px-4 lg:px-8 xl:px-10 mb-6 md:mb-12">
                    @include('_partials._speaker', ['speaker' => $page->speakers['jeremy-keith']])
                </div>
            </div>
            <div class="md:flex md:px-4 lg:px-8 xl:px-10">
                <div class="md:w-1/3 md:px-4 lg:px-8 xl:px-10 mb-6 md:mb-12">
                    @include('_partials._speaker', ['speaker' => $page->speakers['nataliya-remez']])
                </div>
                <div class="md:w-1/3 md:px-4 lg:px-8 xl:px-10 mb-6 md:mb-12">
                    @include('_partials._speaker', ['speaker' => $page->speakers['matthias-noback']])
                </div>
                <div class="md:w-1/3 md:px-4 lg:px-8 xl:px-10 mb-6 md:mb-12">
                    @include('_partials._speaker', ['speaker' => $page->speakers['mattias-geniar']])
                </div>
            </div>
            <div class="md:flex md:px-4 lg:px-8 xl:px-10">
                <div class="md:w-1/3 md:px-4 lg:px-8 xl:px-10 mb-6 md:mb-12">
                    @include('_partials._speaker', ['speaker' => $page->speakers['rik-van-bruggen']])
                </div>
                <div class="md:w-1/3 md:px-4 lg:px-8 xl:px-10 mb-6 md:mb-12">
                    @include('_partials._speaker', ['speaker' => $page->speakers['gabi-davila']])
                </div>
                <div class="md:w-1/3 md:px-4 lg:px-8 xl:px-10 mb-6 md:mb-12">
                    @include('_partials._speaker', ['speaker' => $page->speakers['indu-alagarsamy']])
                </div>
            </div>
            <div class="title-sm mt-12 italic">More coming soon...</div>
        </div>
    </div>
</div>
