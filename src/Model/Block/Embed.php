<?php

namespace Pentiminax\UX\Editor\Model\Block;

use Pentiminax\UX\Editor\Enum\BlockType;
use Pentiminax\UX\Editor\Enum\EmbedService;
use Pentiminax\UX\Editor\Model\BlockData\EmbedData;

final class Embed extends AbstractBlock
{
    public static function new(string $caption, string $url, int $height, EmbedService $service, int $width): self
    {
        return new self(
            new EmbedData($caption, $url, $height, $service, $width)
        );
    }

    public function getType(): BlockType
    {
        return BlockType::EMBED;
    }
}