<?php

namespace Database\Seeders;

use App\Models\Sponsor;
use Illuminate\Database\Seeder;

class SponsorSeeder extends Seeder
{
    public function run(): void
    {
        Sponsor::factory()->times(16)->create(['edition_id' => 1]);
        Sponsor::factory()->times(16)->create(['edition_id' => 2]);
    }
}
