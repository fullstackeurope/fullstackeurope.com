{{--@if ($edition->tickets_url)--}}
{{--    <p class="mb-4">--}}
{{--        <a class="btn-tickets" href="{{ $edition->tickets_url }}" target="_blank">--}}
{{--            {{ $edition->ticketsLabel() }}--}}
{{--        </a>--}}
{{--    </p>--}}

{{--    <p class="mb-4 sm:mb-10">--}}
{{--        <a class="{{ $linkColor ?? '' }} border-b border-dotted leading-normal" href="https://ti.to/on3/fullstack19">--}}
{{--            Get a discount for teams of 4<br>--}}
{{--            or more with Full Team Tickets!--}}
{{--        </a>--}}
{{--    </p>--}}

{{--    @if ($edition->sale_ends_at)--}}
{{--        <p class="font-noway-medium italic text-1xl leading-normal max-w-xs mx-auto">--}}
{{--            <span class="timer" data-expires="{{ $edition->sale_ends_at->getTimestamp() }}" data-threshold-days="30">--}}
{{--                {{ $edition->sale_ends_description }}<br>--}}
{{--                <span class="days">0</span>d,--}}
{{--                <span class="hours">0</span>h,--}}
{{--                <span class="minutes">0</span>m,--}}
{{--                <span class="seconds">0</span>s--}}
{{--            </span>--}}
{{--        </p>--}}
{{--    @endif--}}
{{--@endif--}}

<p class="mb-4">
    <a class="btn-tickets" href="{{ route('home', 2020) }}" target="_blank">
        Check out the next edition
    </a>
</p>

<p class="mb-4 sm:mb-10">
    <a class="{{ $linkColor ?? '' }} border-b border-dotted leading-normal" href="https://www.youtube.com/watch?v=TbDWdVJECt4&list=PLeWf1pVncHmZMNIxp1XLWTYPMs2B25jEx" target="_blank">
        Watch the videos
    </a>
</p>
