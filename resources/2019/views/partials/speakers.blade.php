@if (count($speakers))
    <div id="speakers" class="container mx-auto px-4 bg-white mx-auto pt-10 md:pt-20">
        <h3 class="pre-title">Meet our speakers</h3>
        <h2 class="title">Featuring talks from</h2>
        <div class="md:grid md:grid-cols-3 md:col-gap-16 md:row-gap-12 md:px-4 lg:px-8 xl:px-16">
            @foreach ($speakers as $speaker)
                @include('2019::partials.speaker', compact('speaker'))
            @endforeach
        </div>
    </div>
@endisset
