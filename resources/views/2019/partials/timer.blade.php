@if ($edition->starts_at)
    <div id="timer" class="timer text-white background-photo-antwerp" data-expires="{{ $edition->starts_at->getTimestamp() }}">
        <div class="overlay py-12 md:py-16">
            <div class="container mx-auto px-4">
                <h2 class="title text-white">
                    Join us at
                    <a class="text-white hover:text-light" href="https://twitter.com/search?q=%23{{ $edition->hashtag }}">
                        #{{ $edition->hashtag }}
                    </a>
                </h2>

                <div class="flex text-center">
                    <div class="w-1/4 border-r border-secondary">
                        <span class="days text-2xl md:text-5xl font-noway-medium">0</span><br>
                        <span class="text-gray uppercase">Days</span>
                    </div>
                    <div class="w-1/4 border-r border-secondary">
                        <span class="hours text-2xl md:text-5xl font-noway-medium">0</span><br>
                        <span class="text-gray uppercase">Hours</span>
                    </div>
                    <div class="w-1/4 border-r border-secondary">
                        <span class="minutes text-2xl md:text-5xl font-noway-medium">0</span><br>
                        <span class="text-gray uppercase">Minutes</span>
                    </div>
                    <div class="w-1/4">
                        <span class="seconds text-2xl md:text-5xl font-noway-medium">0</span><br>
                        <span class="text-gray uppercase">Seconds</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
