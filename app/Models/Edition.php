<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Edition extends Model
{
    protected $dates = [
        'sale_ends_at',
    ];

    protected $casts = [
        'year' => 'integer',
    ];

    public function pageTitle(string $pageTitle = ''): string
    {
        $conferenceName = config('app.name');

        $parts = array_filter([
            $pageTitle,
            "$conferenceName $this->year",
            $pageTitle ? '' : $this->page_title,
        ]);

        return implode(' - ', $parts);
    }
}
