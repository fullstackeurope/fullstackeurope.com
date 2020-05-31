<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Sponsor extends Model
{
    public function logo(): string
    {
        return $this->logo ? asset("/storage/{$this->logo}") : '';
    }

    public function edition()
    {
        return $this->belongsTo(Edition::class);
    }
}
