<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Edition;
use App\Models\Speaker;

final class PageController
{
    public function home(Edition $edition)
    {
        $workshops = $edition->speakers()->whereNotNull('workshop')->get();

        return view("{$edition->year}.home", compact('workshops'));
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
