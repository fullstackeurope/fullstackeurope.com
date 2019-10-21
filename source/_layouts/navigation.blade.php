<div id="navigation" class="lg:flex-1 mt-10 lg:mt-0 hidden lg:block lg:text-center lg:px-4 lg:pt-4 lg:leading-normal">
    <nav>
        <ul class="list-reset">
            <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                <a data-scroll href="{{ $page->baseUrl }}#schedule">schedule</a>
            </li>
            <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                <a data-scroll href="{{ $page->baseUrl }}#speakers">speakers</a>
            </li>
            <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                <a data-scroll href="{{ $page->baseUrl }}#workshops">workshops</a>
            </li>
            <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                <a data-scroll href="{{ $page->baseUrl }}#venue">venue</a>
            </li>
            <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                <a data-scroll href="{{ $page->baseUrl }}#sponsors">sponsors</a>
            </li>
            <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                <a data-scroll href="#newsletter">newsletter</a>
            </li>
            <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                <a data-scroll href="{{ $page->baseUrl }}diversity">diversity</a>
            </li>
            <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                <a data-scroll href="{{ $page->baseUrl }}code-of-conduct">coc</a>
            </li>
            <li class="mb-6 lg:mb-0 lg:mr-6 lg:inline-block">
                <a data-scroll href="{{ $page->baseUrl }}faq">faq</a>
            </li>
        </ul>
    </nav>
</div>

<div id="navigationButton" class="hidden lg:block lg:flex-initial lg:pt-2">
    <a class="lg:hidden" href="{{ $page->ticketsUrl }}" target="_blank">tickets</a>
    <a class="hidden lg:inline-block btn-tickets leading-normal" href="{{ $page->ticketsUrl }}" target="_blank">tickets</a>
</div>
