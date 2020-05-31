<div class="md:px-4 mb-8">
    <a href="{{ $speaker->url() }}">
        <div class="speaker enlarge min-h-full md:block shadow-lg-blue rounded text-left md:text-center">
            <div class="w-1/3 md:w-full overflow-hidden bg-gray-200 xl:h-64 relative">
                <div style="height: inherit; transform: translateY(50%);">
                    <img src="{{ $speaker->photo() }}" alt="{{ $speaker->name }}"
                         class="block w-full" style="transform: translateY(-50%);">
                </div>
            </div>
            <div class="w-2/3 md:w-full pt-4 pb-6 md:px-6 flex flex-col justify-center">
                <h3 class="font-noway-medium leading-normal text-primary hover:text-secondary text-lg xl:text-xl">
                    {{ $speaker->name }}
                </h3>

                @if ($speaker->title)
                    <p class="leading-normal text-gray-800 text-left md:text-center">
                        {{ $speaker->title }}
                    </p>
                @endif

                @if ($speaker->talk)
                    <p class="talk leading-normal inline-block text-gray-800 border-t border-dashed mt-4 pt-4 italic text-primary hover:text-secondary text-left md:text-center">
                        Talk: {{ $speaker->talk }}
                    </p>
{{--                @else--}}
{{--                    <p class="talk leading-normal inline-block text-gray-800 border-t border-dashed mt-4 pt-4 italic text-left md:text-center">--}}
{{--                        Talk details coming soon...--}}
{{--                    </p>--}}
                @endif
            </div>
        </div>
    </a>
</div>
