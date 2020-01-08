<?php
declare(strict_types=1);

namespace OrbitCore\DataTransfer\Domain\Builder;


use OrbitCore\DataTransfer\Domain\Builder\Type\TypeInterface;

interface TransferBuilderInterface
{
    public function getData(): array;

    public function transfer(string $name): TypeInterface;
}
