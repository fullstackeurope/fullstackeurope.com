<a class="btn-tickets mb-4 sm:mb-10 mr-4" href="{{ $page->ticketsUrl }}" target="_blank">
    Get Your Ticket
</a>

@php($timeZone = new DateTimeZone('CET'))
@php($date = new DateTimeImmutable('2019-09-15 16:00', $timeZone))
@php($timeRemaining = $date->diff(new DateTimeImmutable('now', $timeZone)))

<p class="font-noway-medium italic text-1xl leading-normal max-w-xs mx-auto">
    <span class="timer" data-expires="{{ $date->getTimestamp() }}" data-threshold-days="30">
        Early bird tickets for workshops, which offer a €100 discount, are still available for<br>
        <span class="days">0</span>d,
        <span class="hours">0</span>h,
        <span class="minutes">0</span>m,
        <span class="seconds">0</span>s
    </span>
</p>
