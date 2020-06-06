<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Edition;
use App\Models\Speaker;
use App\Models\Timeslot;

final class PageController
{
    public function home(Edition $edition)
    {
        $schedule = $edition->timeslots()->orderBy('starts_at')->get()->groupBy(function (Timeslot $timeslot) {
            return $timeslot->starts_at->format('Y-m-d');
        });
        $speakers = $edition->speakers()->whereNotNull('talk')->orderBy('sort_order')->get();
        $workshops = $edition->speakers()->whereNotNull('workshop')->get();

        return view("{$edition->year}.home", compact('schedule', 'speakers', 'workshops'));
    }

    public function speaker(Edition $edition, Speaker $speaker)
    {
        return view("{$edition->year}.speaker", compact('speaker'));
    }

    public function diversity(Edition $edition)
    {
        return view("{$edition->year}.diversity");
    }

    public function codeOfConduct(Edition $edition)
    {
        return view("{$edition->year}.code-of-conduct");
    }

    public function faq(Edition $edition)
    {
        return view("{$edition->year}.faq");
    }
}
