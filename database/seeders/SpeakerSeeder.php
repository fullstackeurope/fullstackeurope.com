<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Speaker;
use App\Models\Timeslot;
use Illuminate\Database\Seeder;

final class SpeakerSeeder extends Seeder
{
    public function run(): void
    {
        Timeslot::all()->each(function (Timeslot $timeslot) {
            Speaker::factory()->create([
                'edition_id' => $timeslot->edition_id,
                'timeslot_id' => $timeslot->id,
            ]);
        });
    }
}