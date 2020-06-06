@extends('2020.layouts.base')

@section('content')
    <div class="intro text-center text-white background-photo">
        <div class="overlay pt-10 md:pt-32 md:pb-20">
            <div class="container mx-auto px-4 py-12 md:py-20">
                <div class="max-w-2xl mx-auto text-xl leading-8 mb-8">
                    <p class="mb-8 px-4">
                        <img class="mx-auto" src="{{ asset('images/2020/logo.svg') }}" width="350" alt="{{ config('app.name') }}">
                    </p>

                    <p class="mb-2">Dear attendees,</p>

                    <p class="mb-2">We’re sad to inform you that, due to the current Corona pandemic, we’ve decided to postpone Full Stack Europe 2020 until next year.</p>

                    <p class="mb-2">It was not an easy decision for us to make. We feel this is the better option than making it an online conference.<br>We’re working on finding a new date in Q4 2021.</p>

                    <p class="mb-2">We’ll make sure that the 2021-edition will be as much fun as our first edition.</p>

                    <p class="mb-2">We hope to see you there.</p>

                    <p>
                        Regards,<br>
                        The Full Stack Europe team
                    </p>
                </div>

                <div class="text-2xl pb-10 md:pb-16">
                    @include('2020.layouts.social')
                </div>

                <p class="mb-4">
                    <a class="btn-tickets" href="{{ route('home', 2021) }}">
                        Join us in 2021
                    </a>
                </p>

                <p class="mb-4 sm:mb-10">
                    <a class="text-white border-b border-dotted leading-normal" href="https://www.youtube.com/watch?v=TbDWdVJECt4&list=PLeWf1pVncHmZMNIxp1XLWTYPMs2B25jEx" target="_blank">
                        Watch the 2019 videos
                    </a>
                </p>

{{--                @include('2020.partials.cta', ['linkColor' => 'text-white'])--}}

{{--                <p class="text-center mt-6">--}}
{{--                    <a class="text-white hover:underline" href="{{ route('home', 2021) }}">--}}
{{--                        Check out the 2021 edition--}}
{{--                    </a>--}}
{{--                </p>--}}
            </div>
        </div>
    </div>

{{--    <div style="background: url('/images/2020/pattern.png') repeat top left">--}}
{{--        @include('2020.partials.newsletter')--}}
{{--        @include('2020.partials.speakers')--}}
{{--    </div>--}}

{{--    @include('2020.partials.timer')--}}

{{--    <div class="text-gray-600 py-6 md:py-12">--}}
{{--        <a id="venue" class="anchor"></a>--}}
{{--        <div id="venue-outer" class="container mx-auto px-4">--}}
{{--            @include('2020.partials.conference')--}}
{{--            @include('2020.partials.venue')--}}
{{--            @include('2020.partials.antwerp')--}}
{{--            @include('2020.partials.2019')--}}
{{--        </div>--}}

{{--        <div class="container mx-auto px-4 text-center text-gray-600 mt-8">--}}
{{--            @include('2020.partials.cta')--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    @include('2020.partials.sponsors')--}}
{{--    @include('2020.partials.organisers')--}}
{{--    @include('2020.partials.diversity')--}}
@endsection
