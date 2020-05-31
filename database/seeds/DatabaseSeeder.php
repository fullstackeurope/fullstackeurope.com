<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(EditionSeeder::class);
        $this->call(SpeakerSeeder::class);
    }
}
