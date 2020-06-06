@isset ($speaker)
    <div id="speakers" class="container mx-auto px-4 bg-white mx-auto pt-10 md:pt-20">
        <h3 class="pre-title">Meet our first 2021 speaker</h3>
        <h2 class="title">Featuring</h2>
        <div class="md:flex md:px-4 lg:px-8 xl:px-10">
            <div class="md:w-1/3"></div>
            @include('2021.partials.speaker', ['speaker' => $speaker])
            <div class="md:w-1/3"></div>
        </div>
    </div>
@endisset
