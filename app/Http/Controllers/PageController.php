<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Edition;
use App\Models\Speaker;
use App\Models\Talk;
use App\Models\Timeslot;
use App\Models\Workshop;
use Illuminate\Contracts\View\View;

final class PageController
{
    public function home(Edition $edition)
    {
        $schedule = $edition->timeslots()->with('talk.speaker')->orderBy('starts_at')->get()->groupBy(function (Timeslot $timeslot) {
            return $timeslot->starts_at->format('Y-m-d');
        });

        $speakers = $edition->speakers()->with('talks', 'workshops')->orderBy('sort_order')->get();

        $talks = $speakers
            ->flatMap(function (Speaker $speaker) {
                return $speaker->talks->map(fn (Talk $talk) => $talk->setRelation('speaker', $speaker));
            })->filter();

        $workshops = $speakers
            ->flatMap(function (Speaker $speaker) {
                return $speaker->workshops->map(fn (Workshop $workshop) => $workshop->setRelation('speaker', $speaker));
            })->filter();

        return view("{$edition->year}::home", compact('schedule', 'speakers', 'talks', 'workshops'));
    }

    public function speaker(Edition $edition, Speaker $speaker)
    {
        return $this->viewOrFail("{$edition->year}::speaker", compact('speaker'));
    }

    public function workshop(Edition $edition, Speaker $speaker)
    {
        return $this->viewOrFail("{$edition->year}::workshop", compact('speaker'));
    }

    public function cfp(Edition $edition)
    {
        return $this->viewOrFail("{$edition->year}::cfp");
    }

    public function values(Edition $edition)
    {
        return $this->viewOrFail("{$edition->year}::values");
    }

    public function sustainability(Edition $edition)
    {
        return $this->viewOrFail("{$edition->year}::sustainability");
    }

    public function diversity(Edition $edition)
    {
        return $this->viewOrFail("{$edition->year}::diversity");
    }

    public function codeOfConduct(Edition $edition)
    {
        return $this->viewOrFail("{$edition->year}::code-of-conduct");
    }

    public function covid19Policy(Edition $edition)
    {
        return $this->viewOrFail("{$edition->year}::covid-19-policy");
    }

    public function faq(Edition $edition)
    {
        return $this->viewOrFail("{$edition->year}::faq");
    }

    public function viewOrFail(string $view, array $data = []): View
    {
        abort_unless(view()->exists($view), 404);

        return view($view, $data);
    }
}
