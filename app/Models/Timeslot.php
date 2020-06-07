<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\ResponseCache\Facades\ResponseCache;

final class Timeslot extends Model
{
    protected $dates = [
        'starts_at',
        'ends_at',
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

    public function time(): string
    {
        return $this->starts_at->timezone('europe/brussels')->format('H:i');
    }

    public function edition()
    {
        return $this->belongsTo(Edition::class);
    }

    public function speaker()
    {
        return $this->hasOne(Speaker::class);
    }
}
