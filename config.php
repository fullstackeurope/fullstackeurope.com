<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '/',
    'ticketsUrl' => 'https://ti.to/on3/fullstack20',
    'collections' => [],
    'venue' => 'Antwerp, Belgium',
    'speakers' => [
        'kevlin-henney' => [
            'url' => 'kevlin-henney',
            'name' => 'Kevlin Henney',
            'twitter' => 'KevlinHenney',
            'website' => 'http://kevlin.eu',
            // 'title' => 'Web stuff do-er at Clearleft',
            // 'talk' => 'Building',
            // 'time' => '16:50',
        ],
    ],
    'stripProtocol' => function (string $website): string {
        $website = Str::replaceFirst('http://', '', $website);

        return Str::replaceFirst('https://', '', $website);
    },
];
