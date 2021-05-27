<?php

namespace App\Console\Commands;

use App\Models\Edition;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Http;

class SyncWorkshopsCommand extends Command
{
    protected $signature = 'sync:workshops';

    protected $description = 'Sync workshops from the on3 feed';

    public function handle()
    {
        $feed = collect(Http::get('https://dddeurope.academy/api/fseu/v1/editions.json')->json());

        Edition::each(function (Edition $edition) use ($feed) {
            $workshops = $feed->filter(function ($workshop) use ($edition) {
                $start = Date::parse($workshop['startDate']);
                $end = Date::parse($workshop['endDate']);

                return $edition->starts_at <= $start && $edition->ends_at >= $end;
            });

            foreach ($workshops as $workshop) {
                foreach ($workshop['instructors'] as $instructor) {
                    $edition->speakers()->updateOrCreate([
                        'slug' => $instructor['instructorId'],
                    ], [
                        'name' => $instructor['name'],
                        'bio' => $instructor['bio'],
                        'twitter' => $instructor['twitter'] ?? '',
                        'photo' => $instructor['image'],
                        'country' => $instructor['country'],
                        'workshop' => $workshop['workshop']['title'],
                        'workshop_subtitle' => $workshop['workshop']['subtitle'],
                        'workshop_duration' => $workshop['durationInMinutes'],
                        'workshop_snippet' => $workshop['workshop']['blurb'],
                        'workshop_description' => $workshop['workshop']['body'],
                        'workshop_schedule' => $workshop['scheduleDetailed'],
                    ]);
                }
            }
        });
    }
}
