<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Edition;
use App\Models\Workshop;
use Illuminate\View\View;

final class WorkshopController
{
    public function __invoke(Edition $edition, Workshop $workshop): View
    {
        return view("{$edition->year}::workshop", compact('workshop'));
    }
}
