@if (count($speakers))
    <div id="speakers" class="container mx-auto px-4 bg-white pt-10 pb-10 md:pt-20">
        <h3 class="pre-title">Meet our speakers</h3>
        <h2 class="title">Featuring talks from</h2>
        <div class="md:grid md:grid-cols-3 lg:grid-cols-4 md:col-gap-6 md:row-gap-6 md:px-4 lg:px-6">
            @foreach ($speakers as $speaker)
                @continue ($speaker->talks->count() === 0 && $speaker->workshops->count())
                @include('2023::partials.talk', compact('speaker'))
            @endforeach
        </div>
        {{--<h2 class="pre-title pb-8 mb-0">… and more to be announced soon!</h2>--}}
    </div>
@endisset
