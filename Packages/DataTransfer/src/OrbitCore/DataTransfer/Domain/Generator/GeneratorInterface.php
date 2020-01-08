<?php
declare(strict_types=1);

namespace OrbitCore\DataTransfer\Domain\Generator;


interface GeneratorInterface
{
    public function transferObject(string $name): TransferGeneratorInterface;
}
