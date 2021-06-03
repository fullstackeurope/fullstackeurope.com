<div class="md:flex mb-6 my-4">
    <div class="md:w-1/6 text-center">
        <a class="mt-2 block h-full" href="{{ $workshop->url() }}#workshop">
            <div class="speaker enlarge image-border-gradient-left inline-block shadow-lg-blue rounded h-24 w-24 lg:h-32 lg:w-32 overflow-hidden">

                <div style="height: inherit; transform: translateY(50%);">
                    <img src="{{ $workshop->speaker->photoUrl(280) }}" alt="{{ $workshop->speaker->name }}"
                         class="block w-full h-full object-cover" style="transform: translateY(-50%);">
                </div>
            </div>
        </a>
    </div>

    <div class="md:w-2/3 md:flex md:flex-col md:justify-center text-center md:text-left">
        <h3 class="font-noway-medium text-xl md:text-2xl mb-0">
            <a href="{{ $workshop->url() }}">{{ $workshop->title }}</a>
        </h3>
        <h4 class=" text-base md:text-lg mb-2">
            {{ $workshop->subtitle }} by {{ $workshop->speaker->name }}
        </h4>
        <p class="mb-2 text-sm md:mr-12 text-gray-600">
            {{ $workshop->snippet }}
        </p>
    </div>

    <div class="md:w-1/6 md:flex md:flex-col md:justify-center">
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
            <a href="{{ $workshop->url() }}#workshop">
                More info <span class="float-right md:float-none md:ml-4">&rsaquo;</span>
            </a>
        </p>
    </div>
</div>
