<?php

declare(strict_types=1);

use App\Models\Edition;
use Illuminate\Database\Seeder;

final class EditionSeeder extends Seeder
{
    public function run(): void
    {
        factory(Edition::class)->create([
            'year' => 2019,
            'hashtag' => 'fseu19',
        ]);
        factory(Edition::class)->create([
            'year' => 2020,
            'hashtag' => 'fseu20',
            'page_title' => 'The International Full Stack Conference',
            'meta_description' => 'The international conference for the entire team. Come learn about Serverless, React, Machine Learning, Chatbots, JavaScript, Application Architecture, Graph Databases, Varnish and much more!',
        ]);
        factory(Edition::class)->create([
            'year' => 2021,
            'hashtag' => 'fseu21',
            'page_title' => 'The International Full Stack Conference',
            'meta_description' => 'The international conference for the entire team. Come learn about Serverless, React, Machine Learning, Chatbots, JavaScript, Application Architecture, Graph Databases, Varnish and much more!',
        ]);
    }
}
