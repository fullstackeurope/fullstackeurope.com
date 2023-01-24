<div class="md:px-4 mb-8">
    <a href="{{ $speaker->url() }}">
        <div class="grid grid-cols-3 gap-0 speaker enlarge min-h-full md:block shadow-lg-blue rounded text-left md:text-center">
            <div class="col-span-1 overflow-hidden xl:h-64 relative">
                <img src="{{ $speaker->photoUrl() }}" alt="{{ $speaker->name }}" class="block w-full bg-gray-200 ">
            </div>
            <div class="col-span-2 pt-4 px-6 pb-6 flex flex-col justify-center">
                <h3 class="font-noway-medium leading-normal text-primary hover:text-secondary text-lg xl:text-xl">
                    {{ $speaker->name }}
                </h3>

                @if ($speaker->title)
                    <p class="leading-normal text-gray-600 text-left md:text-center">
                        {{ $speaker->title }}
                    </p>
                @endif

                @if ($speaker->talks->count())
                    <p class="talk leading-normal inline-block text-gray-600 border-t border-dashed mt-4 pt-4 italic text-primary hover:text-secondary text-left md:text-center">
                        {{ $speaker->talks->first()->title }}
                    </p>
                @else
                    <p class="talk leading-normal inline-block text-gray-600 border-t border-dashed mt-4 pt-4 italic text-left md:text-center">
                        Talk details coming soon...
                    </p>
                @endif
            </div>
        </div>
    </a>
</div>
