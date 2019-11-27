@extends('_layouts.master')

@section('body')
    <div class="intro text-center text-white background-photo">
        <div class="overlay pt-32 md:pt-48 md:pb-20">
            <div class="container mx-auto py-12 md:py-20">
                <h1 class="font-noway-medium text-white md:text-5xl pb-4">
                    See you next year!
                </h1>

                <p class="text-xl leading-normal mx-auto max-w-sm pb-10 md:pb-20">
                    We hope you had a great time at <span class="whitespace-no-wrap">Full Stack Europe</span>. <span class="whitespace-no-wrap">Thank you for attending!</span>
                </p>

                <h2 class="font-noway-medium text-white md:text-2xl pb-4">
                    {{ $page->venue }}
                </h2>
                <h3 class="text-white text-sm md:text-lg pb-2">
                    Workshops - October 7, 2020
                </h3>
                <h3 class="text-white text-sm md:text-lg pb-6">
                    Main Conference - October 8 & 9, 2020
                </h3>

                <div class="text-2xl pb-10 md:pb-16">
                    @include('_layouts._social')
                </div>

                @include('_partials._cta', ['linkColor' => 'text-white'])

                <p class="text-center">
                    <a class="text-white hover:underline" href="{{ $page->baseUrl }}2019">Check out the 2019 edition</a>
                </p>
            </div>
        </div>
    </div>

    @include('_partials.newsletter')

    <div style="background: url('/assets/images/pattern.png') repeat top left">
        @include('_partials.speakers')
    </div>

    @include('_partials.timer')
    @include('_partials.organisers')
    @include('_partials.diversity')
@endsection
