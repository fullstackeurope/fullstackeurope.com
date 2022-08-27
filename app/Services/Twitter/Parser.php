<?php

namespace App\Services\Twitter;

use Carbon\CarbonImmutable;
use Carbon\CarbonInterface;
use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;

class Parser
{
    public function parse(array $tweet): Tweet
    {
        return new Tweet(
            url: $tweet['url'],
            name: $tweet['author_name'],
            username: $username = $this->extractUsername($tweet),
            avatar: 'https://unavatar.io/'.Str::after($username, '@'),
            html: $this->extractHtml($tweet),
            date: $this->extractDate($tweet),
        );
    }

    private function extractUsername(array $data): string
    {
        $parts = explode('/', $data['author_url']);

        return '@'.$parts[count($parts) - 1];
    }

    private function extractHtml(array $data): string
    {
        $crawler = (new Crawler($data['html']))->filter('blockquote.twitter-tweet');

        $html = '<p>'.$crawler->filter('p')->html().'</p>';

        return str_replace('?src=hash&amp;ref_src=twsrc%5Etfw', '', $html);
    }

    private function extractDate(array $data): CarbonInterface
    {
        $crawler = (new Crawler($data['html']))->filter('blockquote.twitter-tweet');

        return CarbonImmutable::createFromFormat(
            'F j, Y',
            $crawler->children()->last()->html(),
        );
    }
}
