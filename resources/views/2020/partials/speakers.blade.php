<div id="speakers" class="container bg-white mx-auto pt-10 md:pt-20">
    <h3 class="pre-title">Meet our first 2020 speaker</h3>
    <h2 class="title">Featuring</h2>
    <div class="md:flex md:px-4 lg:px-8 xl:px-10">
        <div class="md:w-1/3"></div>
        @include('2020.partials.speaker', ['speaker' => \App\Models\Speaker::first()])
{{--        @include('2020.partials.speaker', ['speaker' => $page->fseu20['speakers']['kevlin-henney']])--}}
        <div class="md:w-1/3"></div>
    </div>
</div>
