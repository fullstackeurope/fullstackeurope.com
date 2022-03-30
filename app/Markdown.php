<?php

declare(strict_types=1);

namespace App;

use League\CommonMark\ConverterInterface;

final class Markdown
{
    private ConverterInterface $converter;

    public function __construct(ConverterInterface $converter)
    {
        $this->converter = $converter;
    }

    public function toHtml(string $markdown): string
    {
        return $this->converter->convert($markdown)->getContent();
    }
}
