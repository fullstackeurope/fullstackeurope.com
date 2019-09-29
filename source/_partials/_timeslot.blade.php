<div class="flex">
    <div class="w-1/6 text-left md:text-center text-lg lg:text-2xl pt-3 pb-5 md:py-6 {{ $speaker['time'] ?? 'text-grey-darker' }}">
        {{ $time ?? $speaker['time'] }}
    </div>
    <div class="w-5/6 md:w-2/3 pt-3 pb-5 md:py-6 px-3 border-b border-dashed border-light">
        <h3 class="font-noway-medium text-xl lg:text-2xl mb-2">
            @isset($speaker)
                <a href="/speakers/{{ $speaker['url'] }}/#talk">
                    {{ $speaker['talk'] }}
                </a>
            @else
                {{ $title }}
            @endisset
        </h3>

        @if (isset($speaker) || isset($description))
            <p class="lg:text-xl text-grey-darker">
                @isset($speaker)
                    By {{ $speaker['name'] }} - {{ $speaker['title'] }}
                @else
                    {{ $description ?? '' }}
                @endisset
            </p>
        @endif
    </div>
    <div class="hidden md:block md:w-1/6 text-right py-3 border-b border-dashed border-light">
        @isset($speaker)
            <a href="/speakers/{{ $speaker['url'] }}">
                <div class="speaker enlarge image-border-gradient-left inline-block shadow-lg-blue rounded max-h-32 w-32 h-24 overflow-hidden">
                    <div style="height: inherit; transform: translateY(50%);">
                        <img src="/assets/images/speakers/{{ $speaker['url'] }}.jpg" alt="{{ $speaker['name'] }}"
                             class="block w-full" style="transform: translateY(-50%);">
                    </div>
                </div>
            </a>
        @endisset
    </div>
</div>
