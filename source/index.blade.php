@extends('_layouts.master')

@section('body')
    <div class="intro text-center text-white">
        <div class="overlay pt-32 md:pt-48 pb-20 md:pb-64">
            <div class="container mx-auto py-12 md:py-20">
                <h1 class="font-medium text-white md:text-5xl pb-16">A conference for every kind of developer</h1>
                <h3 class="text-white md:text-lg pb-2">Workshops - October 23</h3>
                <h3 class="text-white md:text-lg pb-4">Main Conference - October 24 & 25</h3>
                <h2 class="font-medium text-white md:text-2xl pb-12">{{ $page->venue }}</h2>
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
