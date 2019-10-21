<div class="md:w-1/3 md:px-4 lg:px-8 xl:px-10 mb-6 md:mb-12">
    <a href="{{ $page->baseUrl }}speakers/{{ $speaker['url'] }}">
        <div class="speaker enlarge flex h-full md:block shadow-lg-blue rounded text-left md:text-center">
            <div class="w-1/3 md:w-full overflow-hidden xl:h-64 relative">
                <div style="height: inherit; transform: translateY(50%);">
                    <img src="{{ $page->baseUrl }}assets/images/speakers/{{ $speaker['url'] }}.jpg" alt="{{ $speaker['name'] }}"
                         class="block w-full" style="transform: translateY(-50%);">
                </div>
            </div>
            <div class="w-2/3 md:w-full pt-4 pb-6 px-6 flex flex-col justify-center">
                <h3 class="font-noway-medium leading-normal text-primary hover:text-secondary text-lg xl:text-xl">
                    {{ $speaker['name'] }}
                </h3>
                <p class="leading-normal text-grey-darker text-left md:text-center">
                    {{ $speaker['title'] }}
                </p>

                @isset($speaker['talk'])
                    <p class="talk leading-normal inline-block text-grey-darker border-t border-dashed mt-4 pt-4 italic text-primary hover:text-secondary text-left md:text-center">
                        Talk: {{ $speaker['talk'] }}
                    </p>
                @else
                    <p class="talk leading-normal inline-block text-grey-darker border-t border-dashed mt-4 pt-4 italic text-left md:text-center">
                        Talk details coming soon...
                    </p>
                @endisset
            </div>
        </div>
    </a>
</div>
