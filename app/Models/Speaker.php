<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    public function websiteHost(): string
    {
        $website = Str::replaceFirst('http://', '', $this->website);

        return Str::replaceFirst('https://', '', $website);
    }

    public function edition()
    {
        return $this->belongsTo(Edition::class);
    }
}
