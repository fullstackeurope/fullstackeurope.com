<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Edition extends Model
{
    protected $dates = [
        'sale_ends_at',
        'starts_at',
    ];

    protected $casts = [
        'year' => 'integer',
    ];

    public function ticketsLabel(): string
    {
        return $this->tickets_label ?? 'Get your tickets';
    }

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

    public function metaImage(): string
    {
        return $this->meta_image ? asset("/storage/{$this->meta_image}") : '';
    }

    public function speakers()
    {
        return $this->hasMany(Speaker::class);
    }

    public function sponsors()
    {
        return $this->hasMany(Sponsor::class);
    }
}
