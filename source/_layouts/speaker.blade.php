@extends('_layouts.page', ['pageTitle' => $speaker['name'], 'maxWidth' => 'max-w-auto'])

@section('content')
    <div class="md:flex md:px-12">
        <div class="md:w-1/3 mt-4 mb-6">
            <div class="image-background-gradient md:w-5/6">
                <img src="/assets/images/speakers/{{ $speaker['url'] }}.jpg" alt="{{ $speaker['name'] }}">
            </div>

            <p class="mt-6">
                <a href="https://twitter.com/{{ $speaker['twitter'] }}">
                    <i class="fab fa-twitter pr-1"></i>
                    {{ '@'.$speaker['twitter'] }}
                </a><br>
                <a href="https://{{ $speaker['website'] }}">
                    <i class="fas fa-globe-europe pr-1"></i>
                    {{ $speaker['website'] }}
                </a>
            </p>
        </div>
        <div class="md:w-2/3">
            <h1>{{ $speaker['name'] }}</h1>

            @yield('bio')

            <a class="apply font-noway-medium block" href="/#speakers">
                See all speakers <span class="float-right md:float-none md:ml-4">&rsaquo;</span>
            </a>

            <div class="text-center mt-16">
                @include('_partials._cta')
            </div>
        </div>
    </div>
@endsection
