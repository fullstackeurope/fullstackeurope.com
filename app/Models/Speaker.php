<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Speaker extends Model
{
    public function twitterUrl(): string
    {
        return $this->twitter ? "https://twitter.com/{$this->twitter}" : '';
    }

    public function photo(): string
    {
        return $this->photo ? asset("/storage/{$this->photo}") : asset('/images/speaker-placeholder.png');
    }

    public function edition()
    {
        return $this->belongsTo(Edition::class);
    }
}
