<?php
declare(strict_types=1);

namespace OrbitCore\DataTransfer\Domain;


interface DataTransferFacadeInterface
{
    public function deleteDataTransferObjects(): void;

    public function generateDataTransferObjects(): void;
}
