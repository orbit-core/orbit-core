<?php
declare(strict_types=1);

namespace OrbitCore\DataTransfer\Domain\Builder;


use OrbitCore\DataTransfer\Domain\Builder\Type\TransferTypeInterface;
use OrbitCore\DataTransfer\Domain\Builder\Type\TypeInterface;

interface BuilderFactoryInterface
{
    public function createPropertyType(string $name): TypeInterface;

    public function createTransferType(string $name): TypeInterface;
}
