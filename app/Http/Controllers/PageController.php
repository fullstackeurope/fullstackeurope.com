<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Edition;
use App\Models\Speaker;

final class PageController
{
    public function home(Edition $edition)
    {
        return view("{$edition->year}.home");
    }

    public function diversity(Edition $edition)
    {
        return view("{$edition->year}.diversity");
    }

    public function codeOfConduct(Edition $edition)
    {
        return view("{$edition->year}.code-of-conduct");
    }
}
