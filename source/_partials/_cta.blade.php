<a class="btn-tickets mb-4" href="{{ $page->ticketsUrl }}" target="_blank">
    Register now
</a>

@php($timeZone = new DateTimeZone('CET'))
@php($date = new DateTimeImmutable('2019-06-28 16:00', $timeZone))
@php($timeRemaining = $date->diff(new DateTimeImmutable('now', $timeZone)))

<p class="font-noway-medium italic text-sm leading-normal mb-8">
    €130 discount with Early Bird Tickets
</p>
<p class="font-noway-medium italic text-2xl leading-normal">
    <span class="timer hidden" data-expires="{{ $date->getTimestamp() }}" data-threshold-days="30">
        Early Birds still available for<br>
        <span class="days">0</span>d,
        <span class="hours">0</span>h,
        <span class="minutes">0</span>m,
        <span class="seconds">0</span>s
    </span>
</p>
