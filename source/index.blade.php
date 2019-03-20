@extends('_layouts.master')

@section('body')
    <div class="intro text-center text-white background-photo">
        {{--<div class="overlay pt-32 md:pt-48 pb-20 md:pb-64">--}}
        <div class="overlay pt-32 md:pt-48 pb-0 md:pb-32">
            <div class="container mx-auto py-12 md:py-20">
                <h1 class="font-noway-medium text-white md:text-5xl pb-10 md:pb-16">
                    A conference for every kind of developer
                </h1>
                <h2 class="font-noway-medium text-white md:text-2xl pb-4">
                    {{ $page->venue }}
                </h2>
                <h3 class="text-white text-sm md:text-lg pb-2">
                    Workshops - October 23, 2019
                </h3>
                <h3 class="text-white text-sm md:text-lg pb-10 md:pb-16">
                    Main Conference - October 24 & 25, 2019
                </h3>

                <a class="btn-tickets mb-8" href="{{ $page->ticketsUrl }}" target="_blank">
                    Tickets
                </a>

                @php($timeZone = new DateTimeZone('CET'))
                @php($date = new DateTimeImmutable('2019-04-01 16:00', $timeZone))
                @php($timeRemaining = $date->diff(new DateTimeImmutable('now', $timeZone)))

                <p class="timer font-noway-medium italic text-sm leading-normal" data-expires="{{ $date->getTimestamp() }}">
                    Blind birds still available for
                    <span class="days">0</span>d,
                    <span class="hours">0</span>h,
                    <span class="minutes">0</span>m,
                    <span class="seconds">0</span>s.<br>
                    First speaker announcements in April.
                </p>
            </div>
        </div>
    </div>

    {{--@include('_partials.speakers')--}}

    <div id="venue" class="container text-grey-darker py-6 md:py-12">
        @include('_partials.venue')
        @include('_partials.antwerp')
    </div>

    @include('_partials.timer')
    @include('_partials.sponsors')
    @include('_partials.organisers')
@endsection
