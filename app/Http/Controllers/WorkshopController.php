<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Edition;
use App\Models\Workshop;

final class WorkshopController
{
    public function __invoke(Edition $edition, Workshop $workshop)
    {
        return view("{$edition->year}::workshop", compact('workshop'));
    }
}
