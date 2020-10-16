<?php declare(strict_types=1);

namespace Devvoh\FixedWidth\Field;

interface SupportsTransforming
{
    public function transform(string $value);
    public function unTransform($value): string;
}