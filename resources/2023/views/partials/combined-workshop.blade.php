<div class="md:flex mb-6">
    <div class="md:w-1/5 text-center flex">
        @foreach ($workshops as $workshop)
            <a href="{{ $workshop->speaker->url() }}" @if($loop->first) class="mr-2" style="margin-left: 2.5rem;" @endif >
                <div class="speaker enlarge image-border-gradient-left w-1/2 inline-block shadow-lg-blue rounded h-32 md:w-32 overflow-hidden">
                    <div style="height: inherit; transform: translateY(50%);">
                        <img src="{{ $workshop->speaker->photoUrl() }}" alt="{{ $workshop->speaker->name }}"
                             class="block w-full h-full object-cover" style="transform: translateY(-50%);">
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    <div class="md:w-2/3 md:px-8 pb-4 md:flex md:flex-col md:justify-center text-center md:text-left">
        <h3 class="font-noway-medium text-xl md:text-2xl mb-2">
            <a href="{{ $workshop->speaker->url() }}#workshop">{{ $workshop->title }}</a>
        </h3>
        @if ($workshop->subtitle)
            <h4 class="-mt-4 text-lg mb-2 text-gray-600">{{ $workshop->subtitle }}</h4>
        @endif
        <div class="mb-2 text-xl text-gray-600">
            By
            @foreach ($workshops as $workshop)
                @unless($loop->first)
                    <br/>&amp;
                @endunless
                <span>{{ $workshop->speaker->name }} @if($workshop->speaker->title)- {{ $workshop->speaker->title }}@endif</span>
            @endforeach
        </div>
    </div>

    <div class="md:w-1/6 md:flex md:flex-col md:justify-center" style="flex-shrink: 0;">
        @if ($workshop->sold_out)
            <span class="btn-tickets px-4 mb-4 py-4">
                Sold Out
            </span>
        @elseif ($edition->tickets_url)
            <a class="btn-tickets px-4 mb-4 py-4" href="{{ $edition->tickets_url }}" target="_blank">
                Register now
            </a>
        @else
            <span class="btn-tickets px-4 mb-4 py-4">
                Tickets Closed
            </span>
        @endif

        <p class="md:text-center">
            <a href="{{ $workshop->speaker->url() }}#workshop">
                More info <span class="float-right md:float-none md:ml-4">&rsaquo;</span>
            </a>
        </p>
    </div>
</div>
