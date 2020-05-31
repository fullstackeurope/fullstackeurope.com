<a id="workshops" class="anchor"></a>
<div id="workshops-outer" class="container mx-auto px-6 bg-white text-gray-800 py-12 md:py-16">
    <h3 class="pre-title">Learn by doing</h3>
    <h2 class="title mb-4">Featured Workshops</h2>
    <p class="text-center mb-16">Registrations: 8:30 &bull; Start: 9:30 &bull; End: 17:30</p>

    @foreach ($workshops as $speaker)
        @include('2019.partials.workshop', ['speaker' => $speaker])

        @unless ($loop->last)
            <hr class="border-t border-gray-100 my-6">
        @endunless
    @endforeach
</div>