<?php

use App\Models\Sponsor;
use Illuminate\Database\Seeder;

class SponsorSeeder extends Seeder
{
    public function run(): void
    {
        factory(Sponsor::class)->times(16)->create(['edition_id' => 1]);
        factory(Sponsor::class)->times(16)->create(['edition_id' => 2]);
    }
}
