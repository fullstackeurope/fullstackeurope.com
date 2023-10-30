@extends('2023::layouts.base')

@section('content')
    <div class="intro text-center text-white background-photo">
        <div class="overlay pt-20 md:pb-16">
            <div class="container mx-auto px-4 py-12 md:py-20">
                <h1 class="font-noway-medium text-white md:text-5xl pb-4">
                    It takes a village to raise an app
                </h1>

                {{--
                <p class="text-xl leading-normal italic mx-auto max-w-md pb-6">
                    &ldquo;Nurturing great products takes skills across the stack. Generalists and specialists, people that dare to break out of the silos.&rdquo;
                </p>

                <p class="text-2xl leading-normal mx-auto max-w-md pb-10 md:pb-16">
                    Full Stack Europe is for full stack developers and full circle teams.
                </p>
                --}}

                <h2 class="font-noway-medium text-white md:text-2xl pb-4">
                    {{ $edition->venue }}
                </h2>
                <h3 class="text-white text-sm md:text-lg pb-2">
                    Workshops - October 18, 2023
                </h3>
                <h3 class="text-white text-sm md:text-lg pb-2">
                    Main Conference - October 19 & 20, 2023
                </h3>

                <div class="text-2xl pb-4 pt-6">
                    {{--
                    <div class="max-w-md mx-auto mb-8">
                        <div class="inline-block rounded-md shadow">
                            <a href="{{ $edition->tickets_url }}" class="btn-tickets w-full"> Buy tickets </a>
                        </div>
                        <div class="inline-block rounded-md shadow">
                            <a href="#workshops" class="btn-tickets w-full"> View Workshops </a>
                        </div>
                    </div>
                    --}}

                    @include('2023::layouts.social')

                    {{--
                    <p class="text-center text-sm mt-2">
                        <a class="text-white hover:underline" href="{{ route('home', 2022) }}">
                            Check out the 2022 edition
                        </a>
                    </p>
                    --}}

                    <p class="mb-4 sm:mb-10 text-base">
                        <a class="text-white border-b border-dotted leading-normal" href="https://photos.app.goo.gl/zGgR2Cy24L7BtfbF7" target="_blank">
                            Check out the photos
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-64 -mt-20 pb-12" style="background: url('/assets/2023/images/pattern.png') repeat top left">
        <div class="-mt-64">
            {{--
            @include('2023::partials.alert')
            --}}
            @include('2023::partials.schedule')
        </div>

        @include('2023::partials.talks')
        @include('2023::partials.workshops')

        @if ($edition->tickets_url)
            @include('2023::partials.cta')
        @endif
    </div>

    <div class="text-gray-600 py-6 md:py-12">
        <a id="venue" class="anchor"></a>
        <div id="venue-outer" class="container mx-auto px-4">
            @include('2023::partials.conference')
            @include('2023::partials.venue')
            @include('2023::partials.antwerp')
            @include('2023::partials.2022')
        </div>
    </div>

    @include('2023::partials.sponsors')
    @include('2023::partials.testimonials')
    @include('2023::partials.organisers')
    @include('2023::partials.diversity')
@endsection
