<?php
declare(strict_types=1);

namespace OrbitCore\DataTransfer\Domain;


use OrbitCore\DataTransfer\Domain\Builder\BuilderFactoryInterface;
use OrbitCore\DataTransfer\Domain\Builder\TransferBuilderInterface;

interface DataTransferDomainFactoryInterface
{
    public function createBuilderFactory(): BuilderFactoryInterface;

    public function createTransferBuilder(): TransferBuilderInterface;
}
