<div id="navigation" class="lg:flex-1 mt-10 lg:mt-0 hidden lg:block lg:text-right lg:px-4 lg:pt-4 lg:leading-normal">
    <nav>
        <ul class="list-reset">
            @if ($edition->publish_schedule && $edition->talks->count())
                <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                    <a data-scroll href="{{ route('home', $edition) }}#schedule">schedule</a>
                </li>
            @endif

            @if ($edition->talks->count())
                <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                    <a data-scroll href="{{ route('home', $edition) }}#speakers">speakers</a>
                </li>
            @endif

            @if ($edition->workshops->count())
                <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                    <a data-scroll href="{{ route('home', $edition) }}#workshops">workshops</a>
                </li>
            @endif

            @if ($edition->venue)
                <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                    <a data-scroll href="{{ route('home', $edition) }}#venue">venue</a>
                </li>
            @endif

            <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                <a data-scroll href="{{ route('cfp', $edition) }}">cfp</a>
            </li>
            <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                <a data-scroll href="{{ route('home', $edition) }}#sponsors">sponsors</a>
            </li>
            <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                <a data-scroll href="{{ route('home', $edition) }}#newsletter">newsletter</a>
            </li>
            <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                <a href="{{ route('values', $edition) }}">values</a>
            </li>
            <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                <a href="{{ route('faq', $edition) }}">faq</a>
            </li>
            <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                <a href="{{ route('home', 2022) }}">2022</a>
            </li>
        </ul>
    </nav>
</div>

@if ($edition->tickets_url)
    <div id="navigationButton" class="hidden lg:block lg:flex-initial lg:pt-2">
        <a class="lg:hidden" href="{{ $edition->tickets_url }}" target="_blank">tickets</a>
        <a
            href="{{ $edition->tickets_url }}" target="_blank"
            class="hidden lg:inline-block btn-tickets leading-normal"
        >
            tickets
        </a>
    </div>
@endif
