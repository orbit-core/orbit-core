<?php
declare(strict_types=1);

namespace OrbitCore\DataTransfer\Domain\Generator;


interface TransferGeneratorInterface
{
    public function property(string $name): PropertyGeneratorInterface;
}
