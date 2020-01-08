<?php
declare(strict_types=1);

namespace OrbitCore\DataTransfer\Domain\Processor;


interface GenerateProcessInterface
{
    public function generateDataTransferObjects(): void;
}
