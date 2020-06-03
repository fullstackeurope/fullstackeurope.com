<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

final class Speaker extends Model implements Sortable
{
    use SortableTrait;

    public $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true,
        'sort_on_has_many' => true,
    ];

    public function url(): string
    {
        return route('speaker', [$this->edition, $this]);
    }

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

    public function timeslot()
    {
        return $this->belongsTo(Timeslot::class);
    }
}
