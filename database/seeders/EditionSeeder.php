<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Edition;
use Illuminate\Database\Seeder;

final class EditionSeeder extends Seeder
{
    public function run(): void
    {
        Edition::factory()->create([
            'year' => 2019,
            'hashtag' => 'fseu19',
        ]);
        Edition::factory()->create([
            'year' => 2021,
            'hashtag' => 'fseu21',
            'page_title' => 'The International Full Stack Conference',
            'meta_description' => 'The international conference for the entire team. Come learn about Serverless, React, Machine Learning, Chatbots, JavaScript, Application Architecture, Graph Databases, Varnish and much more!',
        ]);
        Edition::factory()->create([
            'year' => 2022,
            'hashtag' => 'fseu22',
            'page_title' => 'The International Full Stack Conference',
            'meta_description' => 'The international conference for the entire team. Come learn about Serverless, React, Machine Learning, Chatbots, JavaScript, Application Architecture, Graph Databases, Varnish and much more!',
        ]);
        Edition::factory()->create([
            'year' => 2023,
            'hashtag' => 'fseu23',
            'page_title' => 'The International Full Stack Conference',
            'meta_description' => 'The international conference for the entire team. Come learn about Serverless, React, Machine Learning, Chatbots, JavaScript, Application Architecture, Graph Databases, Varnish and much more!',
        ]);
    }
}
