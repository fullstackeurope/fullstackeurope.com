<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(EditionSeeder::class);
        $this->call(TimeslotSeeder::class);
        $this->call(SpeakerSeeder::class);
        $this->call(SponsorSeeder::class);
    }
}
