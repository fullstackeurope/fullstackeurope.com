@extends('_layouts.page', ['pageTitle' => $speaker['name'], 'maxWidth' => 'container'])

@section('content')
    <div class="md:flex md:px-12">
        <div class="md:w-1/3 mt-4 mb-6">
            <div class="image-background-gradient md:w-5/6">
                <img src="{{ $page->baseUrl }}assets/images/speakers/{{ $speaker['url'] }}.jpg" alt="{{ $speaker['name'] }}">
            </div>

            <p class="mt-6">
                <a href="https://twitter.com/{{ $speaker['twitter'] }}">
                    <i class="fab fa-twitter pr-1"></i>
                    {{ '@'.$speaker['twitter'] }}
                </a><br>

                @isset($speaker['website'])
                    <a href="{{ $speaker['website'] }}">
                        <i class="fas fa-globe-europe pr-1"></i>
                        {{ $page['stripProtocol']($speaker['website']) }}
                    </a>
                @endisset
            </p>
        </div>
        <div class="md:w-2/3">
            <h1>{{ $speaker['name'] }}</h1>
            <p class="text-base mb-4 italic">{{ $speaker['title'] }}</p>

            @isset($speaker['talk'])
                <a id="talk" class="anchor-page"></a>
                <h2 data-anchor-id="talk">Talk - {{ $speaker['talk'] }}</h2>

                @yield('talk')
            @endisset

            @isset($speaker['workshop'])
                <a id="workshop" class="anchor-page"></a>
                <h2 data-anchor-id="workshop">Workshop - {{ $speaker['workshop'] }}</h2>

                @yield('workshop')

                @include('_partials._cta_workshop')
            @endisset

            <a id="about" class="anchor-page"></a>
            <h2 data-anchor-id="about">About</h2>

            @yield('bio')

            <a class="apply font-noway-medium block" href="{{ $page->baseUrl }}#speakers">
                See all speakers <span class="float-right md:float-none md:ml-4">&rsaquo;</span>
            </a>
        </div>
    </div>
@endsection
