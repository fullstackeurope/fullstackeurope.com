<?php

namespace App\Services\Twitter;

use Carbon\CarbonInterface;

class Tweet
{
    public function __construct(
        public string $url,
        public string $name,
        public string $username,
        public string $avatar,
        public string $html,
        public CarbonInterface $date,
    ) {
    }
}
