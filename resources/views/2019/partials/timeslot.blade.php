<div class="flex">
    <div class="w-1/6 text-left md:text-center text-lg lg:text-2xl pt-3 pb-5 md:py-6 {{ $timeslot->speaker ? 'text-gray-800' : 'text-gray-600' }}">
        {{ $timeslot->time() }}
    </div>
    <div class="w-5/6 md:w-2/3 pt-3 pb-5 md:py-6 px-3 border-b border-dashed border-light">
        <h3 class="font-noway-medium text-xl lg:text-2xl mb-2">
            @if ($timeslot->speaker)
                <a href="{{ $timeslot->speaker->url() }}#talk">
                    {{ $timeslot->speaker->talk }}
                </a>
            @else
                {{ $timeslot->name }}
            @endif
        </h3>

        @if ($timeslot->speaker || $timeslot->description)
            <p class="lg:text-xl text-gray-600">
                @if ($timeslot->speaker)
                    By {{ $timeslot->speaker->name }} - {{ $timeslot->speaker->title }}
                @else
                    {{ $timeslot->description }}
                @endif
            </p>
        @endif
    </div>
    <div class="hidden md:block md:w-1/6 text-right py-3 border-b border-dashed border-light">
        @if ($timeslot->speaker)
            <a href="{{ $timeslot->speaker->url() }}">
                <div class="speaker enlarge image-border-gradient-left inline-block shadow-lg-blue rounded max-h-32 w-32 h-24 overflow-hidden">
                    <div style="height: inherit; transform: translateY(50%);">
                        <img src="{{ $timeslot->speaker->photo() }}" alt="{{ $timeslot->speaker->name }}"
                             class="block w-full" style="transform: translateY(-50%);">
                    </div>
                </div>
            </a>
        @endif
    </div>
</div>
