<div class="md:flex mb-6">
    <div class="md:w-1/6 text-center">
        <a href="/speakers/{{ $instructor['url'] }}">
            <div class="speaker enlarge image-border-gradient-left w-1/2 inline-block shadow-lg-blue rounded max-h-32 md:w-32 overflow-hidden">
                <div style="height: inherit; transform: translateY(50%);">
                    <img src="/assets/images/speakers/{{ $instructor['url'] }}.jpg" alt="{{ $instructor['name'] }}"
                         class="block w-full" style="transform: translateY(-50%);">
                </div>
            </div>
        </a>
    </div>
    <div class="md:w-2/3 md:px-8 py-4 md:flex md:flex-col md:justify-center text-center md:text-left">
        <h3 class="font-noway-medium text-xl md:text-2xl mb-2"><a href="/speakers/{{ $instructor['url'] }}/#workshop">{{ $instructor['workshop'] }}</a></h3>
        <p class="mb-2">By {{ $instructor['name'] }} - {{ $instructor['title'] }}</p>
    </div>
    <div class="md:w-1/6 md:flex md:flex-col md:justify-center">
        <a class="btn-tickets px-4 mb-4 py-4" href="{{ $page->ticketsUrl }}" target="_blank">Register now</a>
        <p class="md:text-center">
            <a href="/speakers/{{ $instructor['url'] }}/#workshop">
                More info <span class="float-right md:float-none md:ml-4">&rsaquo;</span>
            </a>
        </p>
    </div>
</div>
