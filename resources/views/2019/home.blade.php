@extends('2019.layouts.base')

@section('content')
    <div class="intro text-center text-white background-photo-antwerp">
        <div class="overlay pt-32 md:pt-48 md:pb-20">
            <div class="container mx-auto px-4 py-12 md:py-20">
                <h1 class="font-noway-medium text-white md:text-5xl pb-4">
                    The conference for the whole team
                </h1>

                <p class="text-xl leading-normal italic mx-auto max-w-md pb-10 md:pb-20">
                    &ldquo;The best apps aren't built by programmers. They're built by teams. That's why we designed this conference for everybody.&rdquo;
                </p>

                <h2 class="font-noway-medium text-white md:text-2xl pb-4">
                    {{ $edition->venue }}
                </h2>
                <h3 class="text-white text-sm md:text-lg pb-2">
                    Workshops - October 23, 2019
                </h3>
                <h3 class="text-white text-sm md:text-lg pb-6">
                    Main Conference - October 24 & 25, 2019
                </h3>

                <div class="text-2xl pb-10 md:pb-16">
                    @include('2019.layouts.social')
                </div>

                @include('2019.partials.cta', ['linkColor' => 'text-white'])
            </div>
        </div>
    </div>

    <div style="background: url('/images/2019/pattern.png') repeat top left">
        @include('2019.partials.newsletter')
        @include('2019.partials.schedule')
        @include('2019.partials.speakers')
        @include('2019.partials.workshops')
    </div>

    @include('2019.partials.timer')

    <div class="text-gray-600 py-6 md:py-12">
        <a id="venue" class="anchor"></a>
        <div id="venue-outer" class="container mx-auto px-4">
            @include('2019.partials.conference')
            @include('2019.partials.venue')
            @include('2019.partials.antwerp')
        </div>

        <div class="container mx-auto px-4 text-center text-gray-600 mt-8">
            @include('2019.partials.cta')
        </div>
    </div>

    @include('2019.partials.sponsors')
    @include('2019.partials.organisers')
    @include('2019.partials.diversity')
@endsection
