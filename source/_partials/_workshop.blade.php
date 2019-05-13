<div class="flex mb-6">
    <div class="w-1/3 md:w-1/6 text-center">
        <a href="/speakers/{{ $instructor['url'] }}">
            <div class="speaker enlarge image-border-gradient-left inline-block shadow-lg-blue rounded h-24 md:w-32 overflow-hidden">
                <div style="height: inherit; transform: translateY(50%);">
                    <img src="/assets/images/speakers/{{ $instructor['url'] }}.jpg" alt="{{ $instructor['name'] }}"
                         class="block w-full" style="transform: translateY(-50%);">
                </div>
            </div>
        </a>
    </div>
    <div class="w-2/3 md:w-2/3 px-8 flex flex-col justify-center">
        <h3 class="font-noway-medium text-xl md:text-2xl mb-2">{{ $instructor['workshop'] }}</h3>
        <p class="mb-2">By {{ $instructor['name'] }}</p>
        <p class="hidden md:block">
            <a href="/speakers/{{ $instructor['url'] }}/#workshop">
                More info <span class="float-right md:float-none md:ml-4">&rsaquo;</span>
            </a>
        </p>
    </div>
    <div class="hidden md:block md:w-1/6 md:flex md:flex-col md:justify-center">
        <a class="btn-tickets px-4" href="{{ $page->ticketsUrl }}" target="_blank">Register now</a>
    </div>
</div>

<p class="md:hidden mb-6">
    <a href="/speakers/{{ $instructor['url'] }}/#workshop">
        More info <span class="float-right md:float-none md:ml-4">&rsaquo;</span>
    </a>
</p>

<div class="md:hidden">
    <a class="btn-tickets py-3" href="{{ $page->ticketsUrl }}" target="_blank">Register now</a>
</div>
