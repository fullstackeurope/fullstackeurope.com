@extends('2022::layouts.base')

@section('content')
    <div class="intro text-center text-white background-photo">
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
                    Workshops - October 5, 2022
                </h3>
                <h3 class="text-white text-sm md:text-lg pb-6">
                    Main Conference - October 6 & 7, 2022
                </h3>

{{--                <h2 class="font-noway-medium text-white md:text-2xl pb-4">--}}
{{--                    Antwerp, Belgium &bull; 5, 6 & 7 October 2022--}}
{{--                </h2>--}}

                <div class="text-2xl pb-4">
                    @include('2022::layouts.social')
                    <p class="mb-4 mt-6 text-base">
                        <a class="btn-tickets" href="https://fullstackeurope.com/2023" target="_blank">
                            Check out the next edition
                        </a>
                    </p>
                    <p class="mb-4 sm:mb-10 text-base">
                        <a class="text-white border-b border-dotted leading-normal ml-6" href="https://www.youtube.com/playlist?list=PLeWf1pVncHmZIZFuhzETHDD-3KKmxiBdb" target="_blank">
                            Watch the videos
                        </a>
                        <a class="text-white border-b border-dotted leading-normal ml-6" href="https://photos.app.goo.gl/81owXCGFTuCSrRWP9" target="_blank">
                            Check out the photos
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-96 -mt-24" style="background: url('/assets/2022/images/pattern.png') repeat top left">
        <div class="-mt-96">
            @include('2022::partials.schedule')
        </div>

        @include('2022::partials.newsletter')
        @include('2022::partials.workshops')
        @include('2022::partials.talks')
    </div>

    @include('2022::partials.timer')

    <div class="text-gray-600 py-6 md:py-12">
        <a id="venue" class="anchor"></a>
        <div id="venue-outer" class="container mx-auto px-4">
            @include('2022::partials.conference')
            @include('2022::partials.venue')
            @include('2022::partials.antwerp')
            @include('2022::partials.2019')
        </div>
    </div>

    @include('2022::partials.sponsors')
    @include('2022::partials.testimonials')
    @include('2022::partials.organisers')
    @include('2022::partials.diversity')
@endsection
