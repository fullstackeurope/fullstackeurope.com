<?php

declare(strict_types=1);

use App\Models\Speaker;
use Illuminate\Database\Seeder;

final class SpeakerSeeder extends Seeder
{
    public function run(): void
    {
        factory(Speaker::class)->times(10)->create(['edition_id' => 1]);
        factory(Speaker::class)->times(10)->create(['edition_id' => 2]);
    }
}
