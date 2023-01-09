<div id="testimonials" class="text-grey-darker py-12 md:py-16">
    <h3 class="pre-title">What did people have to say?</h3>
    <h2 class="title">Testimonials</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 container mx-auto">
        @php($tweets = [
            'https://twitter.com/joelbutcher97/status/1578718335813885954',
            'https://twitter.com/vanamerongen/status/1578710586053263360',
            'https://twitter.com/maybeFrederick/status/1578709015093125120',
            'https://twitter.com/noctovis/status/1578641231873478656',
            'https://twitter.com/aarondfrancis/status/1578500367771320320',
            'https://twitter.com/mazedlx/status/1578493175031005185',
            'https://twitter.com/mjwhansen/status/1578482334419939330',
            'https://twitter.com/Sjors1985/status/1578453142852685824',
            'https://twitter.com/BurtDS/status/1578424740162994176',
            'https://twitter.com/tvbeek/status/1578416744569327616',
            'https://twitter.com/xiCO2k/status/1578400544850411520',
            'https://twitter.com/KeerthanaK17/status/1578048416210378752',
            'https://twitter.com/RoseSecOps/status/1578324665709498368',
            'https://twitter.com/CasperBE/status/1578401579249565701',
        ])
        @foreach ($tweets as $tweet)
            @php(
                /** @var \App\Services\Twitter\Tweet $tweet */
                $tweet = cache()->rememberForever('tweet-' . $tweet, function () use ($tweet) {
                    try {
                        return (new \App\Services\Twitter\TwitterOEmbed())->embed($tweet);
                    } catch (Throwable $e) {
                        return null;
                    }
                })
            )
            @continue(!$tweet)
            <div class="font-sans rounded border px-6 py-4 max-w-md">
                <div class="flex items-center">
                    <a href="{{ $tweet->url }}">
                        <img src="{{ $tweet->avatar }}" class="inline-block h-12 w-12 max-w-none rounded-full" />
                    </a>
                    <div class="flex flex-col ml-4">
                        <a class="font-bold text-black" href="{{ $tweet->url }}">{{ $tweet->name }}</a>
                        <span class="text-grey">{{ $tweet->username }}</span>
                    </div>
                </div>
                <div class=" mt-3 mb-1 leading-normal text-base">{!! $tweet->html !!}</div>
                <div class="text-grey mb-3 text-sm">{{ $tweet->date->toDayDateTimeString() }}</div>
            </div>
        @endforeach
    </div>
</div>
