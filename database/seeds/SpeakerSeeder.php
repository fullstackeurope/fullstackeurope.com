<?php

declare(strict_types=1);

use App\Models\Speaker;
use App\Models\Timeslot;
use Illuminate\Database\Seeder;

final class SpeakerSeeder extends Seeder
{
    public function run(): void
    {
        Timeslot::all()->each(function (Timeslot $timeslot) {
            factory(Speaker::class)->create([
                'edition_id' => $timeslot->edition_id,
                'timeslot_id' => $timeslot->id,
            ]);
        });
    }
}
