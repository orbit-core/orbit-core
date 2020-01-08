<?php
declare(strict_types=1);

namespace OrbitCore\DataTransfer\Domain\Generator;


interface PropertyGeneratorInterface
{
    public function allowNull(bool $allow = true): self;

    public function setDefaultValue(string $default): self;

    public function setType(string $type): self;
}
