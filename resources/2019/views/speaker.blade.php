@extends('2019::layouts.page', ['pageTitle' => $speaker->name, 'maxWidth' => 'container'])

@section('page')
    <div class="md:flex md:px-12">
        <div class="md:w-1/3 mt-4 mb-6">
            <div class="image-background-gradient md:w-5/6">
                <img src="{{ str_contains($speaker->photo, 'cloudinary') ? $speaker->photo : $speaker->photoUrl() }}" alt="{{ $speaker->name }}" class="bg-gray-200">
            </div>

            <p class="mt-6">
                <a href="https://twitter.com/{{ $speaker['twitter'] }}">
                    <i class="fab fa-twitter pr-1"></i>
                    {{ '@'.$speaker['twitter'] }}
                </a><br>

                @isset($speaker['website'])
                    <a href="{{ $speaker['website'] }}">
                        <i class="fas fa-globe-europe pr-1"></i>
                        {{ $speaker->websiteHost() }}
                    </a>
                @endisset
            </p>
        </div>
        <div class="md:w-2/3">
            <h1>{{ $speaker->name }}</h1>
            <p class="text-base mb-4 italic">{{ $speaker->title }}</p>

            @if ($speaker->talk)
                <a id="talk" class="anchor-page"></a>
                <h2 data-anchor-id="talk">Talk - {{ $speaker['talk'] }}</h2>

                @markdown($speaker->abstract)
            @endif

            @if ($speaker->workshop)
                <a id="workshop" class="anchor-page"></a>
                <h2 data-anchor-id="workshop">Workshop - {{ $speaker->workshop }}</h2>

                @markdown($speaker->workshop_description)

                @include('2019::partials.cta_workshop')
            @endif

            @if ($speaker->bio)
                <a id="about" class="anchor-page"></a>
                <h2 data-anchor-id="about">About</h2>

                @markdown($speaker->bio)
            @endif

            <a class="apply font-noway-medium block" href="{{ route('home', $edition) }}/#speakers">
                See all speakers <span class="float-right md:float-none md:ml-4">&rsaquo;</span>
            </a>
        </div>
    </div>
@endsection
