@php($timeZone = new DateTimeZone('CET'))
@php($date = new DateTimeImmutable('2019-10-24', $timeZone))
@php($timeRemaining = $date->diff(new DateTimeImmutable('now', $timeZone)))

<div id="timer" class="timer text-white background-photo" data-expires="{{ $date->getTimestamp() }}">
    <div class="overlay py-12 md:py-16">
        <div class="container">
            <h2 class="title text-white">
                Join us at
                <a class="text-white hover:text-light" href="https://twitter.com/search?q=%23FSEU19">#FSEU19</a>
            </h2>

            <div class="flex text-center">
                <div class="w-1/4 border-r border-secondary">
                    <span class="days text-2xl md:text-5xl font-noway-medium">0</span><br>
                    <span class="text-grey uppercase">Days</span>
                </div>
                <div class="w-1/4 border-r border-secondary">
                    <span class="hours text-2xl md:text-5xl font-noway-medium">0</span><br>
                    <span class="text-grey uppercase">Hours</span>
                </div>
                <div class="w-1/4 border-r border-secondary">
                    <span class="minutes text-2xl md:text-5xl font-noway-medium">0</span><br>
                    <span class="text-grey uppercase">Minutes</span>
                </div>
                <div class="w-1/4">
                    <span class="seconds text-2xl md:text-5xl font-noway-medium">0</span><br>
                    <span class="text-grey uppercase">Seconds</span>
                </div>
            </div>
        </div>
    </div>
</div>
