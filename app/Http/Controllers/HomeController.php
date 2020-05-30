<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Edition;

final class HomeController
{
    public function __invoke(Edition $edition)
    {
        return view("{$edition->year}.home");
    }
}
