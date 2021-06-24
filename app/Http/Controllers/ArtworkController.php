<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Edition;
use App\Models\Talk;
use App\Models\Workshop;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Browsershot\Browsershot;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

final class ArtworkController
{
    public function workshop(Edition $edition, Workshop $workshop)
    {
        $html = view("{$edition->year}::partials.artwork", [
            'speaker_name' => $workshop->speaker->name,
            'title' => $workshop->title,
            'subtitle' => $workshop->subtitle,
            'snippet' => $workshop->snippet,
            'avatar' => $workshop->speaker->photoUrl(300),
        ])->render();

        return $this->renderImage($workshop, $html);
    }

    public function talk(Edition $edition, Talk $talk)
    {
        $html = view("{$edition->year}::partials.artwork", [
            'speaker_name' => $talk->speaker->name,
            'title' => $talk->title,
            'snippet' => $talk->abstract,
            'avatar' => $talk->speaker->photoUrl(300),
        ])->render();

        return $this->renderImage($talk, $html);
    }

    private function renderImage(Model $model, string $html): BinaryFileResponse
    {
        $signature = md5($html);

        if ($signature === $model->getArtworkSignature()) {
            return response()->file(Storage::path($model->getArtworkPath()));
        }

        Storage::makeDirectory($model->getArtworkDirectory());

        $file = Browsershot::html($html)
            ->windowSize(1200, 630)
            ->deviceScaleFactor(2)
            ->select('#artwork')
            ->delay(2000)
            ->disableJavascript()
            ->screenshot();

        file_put_contents(Storage::path($model->getArtworkPath()), $file);

        $model->update(['artwork_signature' => $signature]);

        return response()->file(Storage::path($model->getArtworkPath()));
    }
}
