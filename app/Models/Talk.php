<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use Spatie\ResponseCache\Facades\ResponseCache;

final class Talk extends Model
{
    use HasFactory;

    protected $guarded = [];

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

    public function timeslot(): BelongsTo
    {
        return $this->belongsTo(Timeslot::class);
    }

    public function speaker(): BelongsTo
    {
        return $this->belongsTo(Speaker::class);
    }
}
