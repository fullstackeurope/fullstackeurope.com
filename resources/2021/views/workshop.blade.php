@extends('2021::layouts.page', ['pageTitle' => $workshop->title. ' - ' . $workshop->speaker->name, 'maxWidth' => 'container'])

@section('page')
    <div class="md:flex md:px-12">
        <div class="md:w-1/3 mt-4 mb-6">
            <div class="image-background-gradient md:w-5/6">
                <img src="{{ $workshop->speaker->photoUrl(650) }}" alt="{{ $workshop->speaker->name }}" class="bg-gray-200">
            </div>

            <p class="mt-6">
                <a href="https://twitter.com/{{ $workshop->speaker['twitter'] }}">
                    <i class="fab fa-twitter pr-1"></i>
                    {{ '@'.$workshop->speaker['twitter'] }}
                </a><br>

                @isset($workshop->speaker['website'])
                    <a href="{{ $workshop->speaker['website'] }}">
                        <i class="fas fa-globe-europe pr-1"></i>
                        {{ $workshop->speaker->websiteHost() }}
                    </a>
                @endisset
            </p>
        </div>
        <div class="md:w-2/3">
            <h1>{{ $workshop->speaker->name }}</h1>
            <p class="text-base mb-4 italic">{{ $workshop->speaker->title }}</p>

            <h2 data-anchor-id="workshop">{{ $workshop->title }}</h2>
            <h3>{{ $workshop->subtitle }}</h3>
            <div class="mb-4 tabular-nums">
                {!! nl2br($workshop->schedule) !!}
            </div>

            @markdown($workshop->snippet)
            @markdown($workshop->description)

            @include('2021::partials.cta_workshop')

            @if ($workshop->speaker->bio)
                <a id="about" class="anchor-page"></a>
                <h2 data-anchor-id="about">About</h2>

                @markdown($workshop->speaker->bio)
            @endif

            <a class="apply font-noway-medium block" href="{{ route('home', $edition) }}/#workshops">
                See all workshops <span class="float-right md:float-none md:ml-4">&rsaquo;</span>
            </a>
        </div>
    </div>
@endsection
