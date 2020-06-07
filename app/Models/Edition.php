<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\ResponseCache\Facades\ResponseCache;

/**
 * @property Carbon $starts_at
 * @property Carbon $ends_at
 */
final class Edition extends Model
{
    protected $dates = [
        'sale_ends_at',
        'starts_at',
        'ends_at',
    ];

    protected $casts = [
        'year' => 'integer',
    ];

    public static function booted()
    {
        self::created(function () {
            ResponseCache::clear();
        });

        self::updated(function () {
            ResponseCache::clear();
        });

        self::deleted(function () {
            ResponseCache::clear();
        });
    }

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

    public function timeslots()
    {
        return $this->hasMany(Timeslot::class);
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
