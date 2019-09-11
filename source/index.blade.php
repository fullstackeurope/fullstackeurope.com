@extends('_layouts.master')

@section('body')
    <div class="intro text-center text-white background-photo">
        <div class="overlay pt-32 md:pt-48 pb-20 md:pb-64">
            <div class="container mx-auto py-12 md:py-20">
                <h1 class="font-noway-medium text-white md:text-5xl pb-4">
                    The conference for the whole team
                </h1>

                <p class="text-xl leading-normal italic mx-auto max-w-md pb-10 md:pb-20">
                    &ldquo;The best apps aren't built by programmers. They're built by teams. That's why we designed this conference for everybody.&rdquo;
                </p>

                <h2 class="font-noway-medium text-white md:text-2xl pb-4">
                    {{ $page->venue }}
                </h2>
                <h3 class="text-white text-sm md:text-lg pb-2">
                    Workshops - October 23, 2019
                </h3>
                <h3 class="text-white text-sm md:text-lg pb-6">
                    Main Conference - October 24 & 25, 2019
                </h3>
                <div class="text-2xl pb-10 md:pb-16">
                    @include('_layouts._social')
                </div>

                @include('_partials._cta')
            </div>
        </div>
    </div>

    @include('_partials.newsletter')
    @include('_partials.speakers')
    @include('_partials.workshops')
    @include('_partials.timer')

    <div class="container text-grey-darker py-6 md:py-12">
        <a id="venue" class="anchor"></a>
        <div id="venue-outer">
            @include('_partials.conference')
            @include('_partials.venue')
            @include('_partials.antwerp')
        </div>

        <div class="text-center text-grey-dark mt-8">
            @include('_partials._cta')
        </div>
    </div>

    @include('_partials.sponsors')
    @include('_partials.organisers')
@endsection
