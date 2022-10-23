@extends('2023::layouts.base')

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
                    October, 2023
                </h3>

                <div class="text-2xl pb-4">
                    @include('2023::layouts.social')

                    <p class="text-center text-sm mt-6">
                        <a class="text-white hover:underline" href="{{ route('home', 2022) }}">
                            Check out the 2022 edition
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-gray-600 py-6 md:py-12">
        <a id="venue" class="anchor"></a>
        <div id="venue-outer" class="container mx-auto px-4">
            {{--
            @include('2023::partials.conference')
            @include('2023::partials.venue')
            @include('2023::partials.antwerp')
            --}}
            @include('2023::partials.2022')
        </div>
    </div>
@endsection
