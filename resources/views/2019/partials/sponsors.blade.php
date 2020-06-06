<a id="sponsors" class="anchor-sponsors"></a>
<div id="sponsors-outer" class="bg-gray-200 text-gray-600 py-12 md:py-16">
    <div class="container mx-auto px-4">
        <div class="md:flex text-center md:pb-0">
            <div class="md:w-1/2">
                <h3 class="pre-title md:text-left">Sponsors</h3>
                <h2 class="title md:mb-0 md:text-left">Become Part Of The Stack</h2>
            </div>
            <div class="md:w-1/2 text-left md:text-right text-lg md:pt-6">
                <a class="apply font-noway-medium block" href="mailto:hello@fullstackeurope.com?subject=We want to sponsor!">
                    Apply as sponsor <span class="float-right md:float-none md:ml-4">&rsaquo;</span>
                </a>
            </div>
        </div>

        @if (count($sponsors = $edition->sponsors))
            @php($levels = $sponsors->groupBy('level'))

            @foreach (['platinum', 'gold', 'silver', 'bronze'] as $level)
                @if ($sponsors = $levels->get($level))
                    <h4 class="font-noway-medium uppercase border-b my-8 pb-3">{{ ucfirst($level) }}</h4>

                    <div class="md:grid {{ $level === 'platinum' ? 'md:grid-cols-3' : 'md:grid-cols-4' }} md:gap-12">
                        @foreach ($sponsors as $sponsor)
                            <div class="mb-4 md:mb-0">
                                @include('2019.partials.sponsor', ['large' => $level === 'platinum', 'sponsor' => $sponsor])
                            </div>
                        @endforeach
                    </div>
                @endif
            @endforeach
        @endif
    </div>
</div>
