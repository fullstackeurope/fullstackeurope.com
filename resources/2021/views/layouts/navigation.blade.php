<div id="navigation" class="lg:flex-1 mt-10 lg:mt-0 hidden lg:block lg:text-center lg:px-4 lg:pt-4 lg:leading-normal">
    <nav>
        <ul class="list-reset">
            @if ($edition->publish_schedule)
                <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                    <a data-scroll href="{{ route('home', $edition) }}#schedule">schedule</a>
                </li>
            @endif

{{--            <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">--}}
{{--                <a data-scroll href="{{ route('home', $edition) }}#speakers">speakers</a>--}}
{{--            </li>--}}

            @if ($edition->venue)
                <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                    <a data-scroll href="{{ route('home', $edition) }}#venue">venue</a>
                </li>
            @endif

            <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                <a data-scroll href="{{ route('home', $edition) }}#newsletter">newsletter</a>
            </li>
            <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                <a href="{{ route('diversity', $edition) }}">diversity</a>
            </li>
            <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                <a href="{{ route('code-of-conduct', $edition) }}">code of conduct</a>
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
