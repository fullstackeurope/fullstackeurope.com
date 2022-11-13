<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\ResponseCache\Facades\ResponseCache;

final class Speaker extends Model implements Sortable
{
    use HasFactory;
    use SortableTrait;

    protected $guarded = [];

    public $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true,
        'sort_on_has_many' => true,
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

    public function url(): string
    {
        return route('speaker', [$this->edition, $this]);
    }

    public function workshopUrl(): string
    {
        return route('workshop', [$this->edition, $this]);
    }

    public function twitterUrl(): string
    {
        return $this->twitter ? "https://twitter.com/{$this->twitter}" : '';
    }

    public function photoUrl(int $width = null): string
    {
        if (! $this->photo) {
            return asset('/images/speaker-placeholder.png');
        }

        if (str_contains($this->photo, 'cloudinary')) {
            if (! $width) {
                return $this->photo;
            }

            $parts = explode('/', $this->photo);
            $uploadIndex = array_search('upload', $parts);
            $suffix = array_slice($parts, $uploadIndex + 1);
            $prefix = array_slice($parts, 0, $uploadIndex + 1);

            return implode('/', $prefix)."/c_scale,w_{$width}/".implode('/', $suffix);
        }

        return asset("/storage/{$this->photo}");
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

    public function talks(): HasMany
    {
        return $this->hasMany(Talk::class);
    }

    public function workshops(): HasMany
    {
        return $this->hasMany(Workshop::class);
    }
}
