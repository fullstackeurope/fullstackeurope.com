<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Speaker;
use App\Models\Talk;
use App\Models\Timeslot;
use App\Models\Workshop;
use Illuminate\Database\Seeder;

final class SpeakerSeeder extends Seeder
{
    public function run(): void
    {
        Timeslot::all()->each(function (Timeslot $timeslot) {
            $speaker = Speaker::factory()->create([
                'edition_id' => $timeslot->edition_id,
            ]);

            Talk::factory()->create([
                'speaker_id' => $speaker->id,
                'timeslot_id' => $timeslot->id,
            ]);

            Workshop::factory()->create([
                'speaker_id' => $speaker->id,
            ]);
        });
    }
}
