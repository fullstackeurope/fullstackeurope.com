@extends('_layouts.master')

@section('body')
    <div class="intro text-center text-white background-photo">
        <div class="overlay pt-32 md:pt-48 pb-20 md:pb-64">
            <div class="container mx-auto py-12 md:py-20">
                <h1 class="font-medium text-white md:text-5xl pb-10 md:pb-16">
                    A conference for every kind of developer
                </h1>
                <h2 class="font-medium text-white md:text-2xl pb-4">
                    {{ $page->venue }}
                </h2>
                <h3 class="text-white text-sm md:text-lg pb-2">
                    Workshops - October 23, 2019
                </h3>
                <h3 class="text-white text-sm md:text-lg pb-10 md:pb-16">
                    Main Conference - October 24 & 25, 2019
                </h3>
                <a class="btn-tickets inline-block w-full md:w-auto text-center text-white text-2xl md:text-lg font-medium uppercase rounded-lg px-12 py-6 md:py-4"
                   href="{{ $page->ticketUrl }}">
                    tickets
                </a>
            </div>
        </div>
    </div>

    @include('_partials.speakers')
    @include('_partials.timer')
    @include('_partials.organisers')
@endsection
