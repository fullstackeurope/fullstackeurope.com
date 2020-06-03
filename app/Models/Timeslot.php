<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Timeslot extends Model
{
    protected $dates = [
        'starts_at',
        'ends_at',
    ];

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
