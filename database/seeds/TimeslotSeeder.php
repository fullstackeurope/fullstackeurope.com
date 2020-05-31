<?php

declare(strict_types=1);

use App\Models\Edition;
use App\Models\Timeslot;
use Illuminate\Database\Seeder;

final class TimeslotSeeder extends Seeder
{
    public function run(): void
    {
        Edition::all()->each(function (Edition $edition) {
            $hour = 9;
            $start = $edition->starts_at;

            for ($i = 1; $i < 11; $i++) {
                factory(Timeslot::class)->create([
                    'edition_id' => $edition->id,
                    'starts_at' => $start = $start->hour($hour)->startOfHour(),
                    'ends_at' => $start->addMinutes(30),
                    'name' => "Speaker $i",
                ]);

                $hour++;
            }

            $hour = 9;
            $start = $edition->starts_at->addDay();

            for ($i = 1; $i < 11; $i++) {
                factory(Timeslot::class)->create([
                    'edition_id' => $edition->id,
                    'starts_at' => $start = $start->hour($hour)->startOfHour(),
                    'ends_at' => $start->addMinutes(30),
                    'name' => "Speaker $i",
                ]);

                $hour++;
            }
        });
    }
}
