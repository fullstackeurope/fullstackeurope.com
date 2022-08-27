<div id="testimonials" class="text-grey-darker py-12 md:py-16">
    <h3 class="pre-title">What did people have to say?</h3>
    <h2 class="title">2019 Testimonials</h2>

    <div class="grid grid-cols-4 gap-4 container mx-auto">
        @php($tweets = [
            'https://twitter.com/SaraSoueidan/status/1188444368920875010',
            'https://twitter.com/FrontEndCoffee/status/1188393980754571264',
            'https://twitter.com/nat_remez/status/1188084774981787654',
            'https://twitter.com/frontendben/status/1188041407329701888',
            'https://twitter.com/rswebdesigner/status/1188028850565013504',
            'https://twitter.com/bramus/status/1188026390081347586',
            //'https://twitter.com/patrosmania/status/188017667757748224',
            'https://twitter.com/j_kniest/status/1188008247971721216',
            'https://twitter.com/Indu_alagarsamy/status/1187978656317984768',
            'https://twitter.com/DeClaessens/status/1187788131363381249',
            //'https://twitter.com/jonas_vandaal/status/1187787100718075907',
            'https://twitter.com/maybeFrederick/status/1187763528196866049',
            'https://twitter.com/schabrechtsk/status/1187760912750563328',
            'https://twitter.com/studioswong/status/1187748928684482560',
            'https://twitter.com/pascualstr/status/1187743931183882240',
            'https://twitter.com/ev_burrell/status/1187865377918869504',
            'https://twitter.com/stef_r/status/1187816272765034496',
            'https://twitter.com/studioswong/status/1187740110873333761',
            //'https://twitter.com/ImranOnline_net/status/1188832807793106944',
        ])
        @foreach ($tweets as $tweet)
            @php(
                /** @var \App\Services\Twitter\Tweet $tweet */
                $tweet = cache()->rememberForever('tweet-' . $tweet, function () use ($tweet) {
                    return (new \App\Services\Twitter\TwitterOEmbed())->embed($tweet);
                })
            )
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
