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

                <div class="text-2xl pb-10 md:pb-16">
                    @include('2022::layouts.social')
                </div>

                @include('2022::partials.cta', ['linkColor' => 'text-white'])

                <p class="text-center mt-6">
                    <a class="text-white hover:underline" href="{{ route('home', 2022) }}">
                        Join us online at #fseu22
                    </a>
                </p>
            </div>
        </div>
    </div>

    <div style="background: url('/assets/2022/images/pattern.png') repeat top left">
        @include('2022::partials.newsletter')
        @include('2022::partials.talks')
        @include('2022::partials.workshops')
    </div>

    <div class="text-gray-600 py-6 md:py-12">
        <a id="venue" class="anchor"></a>
        <div id="venue-outer" class="container mx-auto px-4">
            @include('2022::partials.conference')
            @include('2022::partials.venue')
            @include('2022::partials.antwerp')
            @include('2022::partials.2019')
        </div>

        <div class="container mx-auto px-4 text-center text-gray-600 mt-8">
            @include('2022::partials.cta')
        </div>
    </div>

    @include('2022::partials.timer')

    @include('2022::partials.sponsors')
    @include('2022::partials.organisers')
    @include('2022::partials.diversity')
@endsection
