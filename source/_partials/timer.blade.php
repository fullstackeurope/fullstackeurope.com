{{-- 1569970800 === '2019-10-02' --}}
<div id="timer" class="text-white" data-expires="{{ $expires = 1569970800 }}">
    <div class="overlay py-20">
        <div class="container">
            <h2 class="text-3xl font-medium text-white text-center mb-8">
                Join us at
                <a class="text-white hover:text-light" href="https://twitter.com/search?q=%23FSEU19">#FSEU19</a>
            </h2>

            @php($timeZone = new DateTimeZone('CET'))
            @php($time = (new DateTimeImmutable('2019-10-02', $timeZone))->diff(new DateTimeImmutable('now', $timeZone)))

            <div class="flex text-center">
                <div class="w-1/4 border-r border-secondary">
                    <span class="days text-2xl md:text-5xl font-medium">{{ $time->format('%a') }}</span><br>
                    <span class="text-grey uppercase">Days</span>
                </div>
                <div class="w-1/4 border-r border-secondary">
                    <span class="hours text-2xl md:text-5xl font-medium">{{ $time->h }}</span><br>
                    <span class="text-grey uppercase">Hours</span>
                </div>
                <div class="w-1/4 border-r border-secondary">
                    <span class="minutes text-2xl md:text-5xl font-medium">{{ $time->i }}</span><br>
                    <span class="text-grey uppercase">Minutes</span>
                </div>
                <div class="w-1/4">
                    <span class="seconds text-2xl md:text-5xl font-medium">{{ $time->s }}</span><br>
                    <span class="text-grey uppercase">Seconds</span>
                </div>
            </div>
        </div>
    </div>
</div>
