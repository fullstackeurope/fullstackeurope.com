<div class="md:flex mb-6 my-4">
    <div class="md:w-1/6 text-center">
        <a class="mt-2 block h-full" href="{{ $speaker->workshopUrl() }}">
            <div class="speaker enlarge image-border-gradient-left w-1/2 inline-block shadow-lg-blue rounded max-h-32 md:w-32 overflow-hidden">
                <div style="height: inherit; transform: translateY(50%);">
                    <img src="{{ $speaker->photo }}" alt="{{ $speaker->name }}"
                         class="block w-full h-full object-cover" style="transform: translateY(-50%);">
                </div>
            </div>
        </a>
    </div>

    <div class="md:w-2/3 md:flex md:flex-col md:justify-center text-center md:text-left">
        <h3 class="font-noway-medium text-xl md:text-2xl mb-0">
            <a href="{{ $speaker->workshopUrl() }}#workshop">{{ $speaker->workshop }}</a>
        </h3>
        <h4 class=" text-base md:text-lg mb-2">
            {{ $speaker->workshop_subtitle }} by {{ $speaker->name }}
        </h4>
        <p class="mb-2 text-sm mr-12 text-gray-600">
            {{ $speaker->workshop_snippet }}
        </p>
    </div>

    <div class="md:w-1/6 md:flex md:flex-col md:justify-center">
        @if ($speaker->workshop_sold_out)
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
            <a href="{{ $speaker->workshopUrl() }}#workshop">
                More info <span class="float-right md:float-none md:ml-4">&rsaquo;</span>
            </a>
        </p>
    </div>
</div>
