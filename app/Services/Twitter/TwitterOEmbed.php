<?php

namespace App\Services\Twitter;

use Illuminate\Support\Facades\Http;

class TwitterOEmbed
{
    public function __construct()
    {
        $this->parser = new Parser();
    }

    public function embed(string $url): Tweet
    {
        $response = Http::get(
            'https://publish.twitter.com/oembed',
            ['url' => $url],
        );

        if (! $response->successful()) {
            throw new \Exception("Tweet {$url} can't be fetched.");
        }

        return $this->parser->parse($response->json());
    }
}
