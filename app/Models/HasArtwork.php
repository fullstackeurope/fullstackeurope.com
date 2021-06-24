<?php

namespace App\Models;

trait HasArtwork
{
    public function getArtworkSignature(): ?string
    {
        return $this->artwork_signature;
    }

    public function getArtworkPath(): string
    {
        return "{$this->getArtworkDirectory()}/{$this->slug}.png";
    }

    public function getArtworkDirectory(): string
    {
        return "public/artwork/{$this->getTable()}";
    }
}
