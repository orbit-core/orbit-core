<?php
declare(strict_types=1);

namespace OrbitCore\DataTransfer\Domain\DataTransfer;


interface DataTransferInterface
{
    public function fromArray(array $data): void;

    public function getFields(): array;

    public function isModified(): bool;

    public function modifiedToArray(): array;

    public function toArray(): array;
}
