<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\ResponseCache\Facades\ResponseCache;

final class Sponsor extends Model
{
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

    public function logoUrl(): string
    {
        return $this->logo ? asset("/storage/{$this->logo}") : '';
    }

    public function edition()
    {
        return $this->belongsTo(Edition::class);
    }
}
