@extends('2020._layouts.master')

@section('body')
    <div class="intro text-center text-white background-photo">
        <div class="overlay pt-32 md:pt-48 md:pb-20">
            <div class="container mx-auto py-12 md:py-20">
                <h1 class="font-noway-medium text-white md:text-5xl pb-4">
                    The conference for the whole team
                </h1>

                <p class="text-xl leading-normal italic mx-auto max-w-md pb-10 md:pb-20">
                    &ldquo;The best apps aren't built by programmers. They're built by teams. That's why we designed this conference for everybody.&rdquo;
                </p>

                <h2 class="font-noway-medium text-white md:text-2xl pb-4">
                    {{ $page->fseu20['venue'] }}
                </h2>
                <h3 class="text-white text-sm md:text-lg pb-2">
                    Workshops - October 7, 2020
                </h3>
                <h3 class="text-white text-sm md:text-lg pb-6">
                    Main Conference - October 8 & 9, 2020
                </h3>

                <div class="text-2xl pb-10 md:pb-16">
                    @include('2020._layouts._social')
                </div>

                @include('2020._partials._cta', ['linkColor' => 'text-white'])

                <p class="text-center">
                    <a class="text-white hover:underline" href="{{ $page->fseu20['baseUrl'] }}2019">Check out the 2019 edition</a>
                </p>
            </div>
        </div>
    </div>

    @include('2020._partials.newsletter')

    <div style="background: url('/source/2020/assets/images/pattern.png') repeat top left">
        @include('2020._partials.speakers')
    </div>

    @include('2020._partials.timer')

    <div class="container text-grey-darker py-6 md:py-12">
        <a id="venue" class="anchor"></a>
        <div id="venue-outer">
            @include('2020._partials.conference')
            @include('2020._partials.venue')
            @include('2020._partials.antwerp')
        </div>

        <div class="text-center text-grey-dark mt-8">
            @include('2020._partials._cta')
        </div>
    </div>

    @include('2020._partials.sponsors')
    @include('2020._partials.organisers')
    @include('2020._partials.diversity')
@endsection
