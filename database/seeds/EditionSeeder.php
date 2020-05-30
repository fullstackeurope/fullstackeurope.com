<?php

declare(strict_types=1);

use App\Models\Edition;
use Illuminate\Database\Seeder;

final class EditionSeeder extends Seeder
{
    public function run()
    {
        factory(Edition::class)->create(['year' => 2019]);
        factory(Edition::class)->create([
            'year' => 2020,
            'page_title' => 'The International Full Stack Conference',
            'meta_description' => 'The international conference for the entire team. Come learn about Serverless, React, Machine Learning, Chatbots, JavaScript, Application Architecture, Graph Databases, Varnish and much more!',
        ]);
    }
}
