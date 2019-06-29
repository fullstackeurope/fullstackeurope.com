<a class="btn-tickets mb-10" href="{{ $page->ticketsUrl }}" target="_blank">
    Register now
</a>

@php($timeZone = new DateTimeZone('CET'))
@php($date = new DateTimeImmutable('2019-07-01 16:00', $timeZone))
@php($timeRemaining = $date->diff(new DateTimeImmutable('now', $timeZone)))

<p class="font-noway-medium italic text-2xl leading-normal">
    <span class="timer hidden" data-expires="{{ $date->getTimestamp() }}" data-threshold-days="30">
        Early bird tickets, which offer a €130 discount,<br>are still available for<br class="sm:hidden">
        <span class="days">0</span>d,
        <span class="hours">0</span>h,
        <span class="minutes">0</span>m,
        <span class="seconds">0</span>s
    </span>
</p>
