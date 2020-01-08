<?php
declare(strict_types=1);

namespace OrbitCore\DataTransfer\Domain\Builder\Type;


interface TransferTypeInterface extends TypeInterface
{
    public function property(string $name): PropertyTypeInterface;
}
