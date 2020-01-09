<?php
declare(strict_types=1);

namespace OrbitCore\DataTransfer\Domain\DataTransfer;


abstract class AbstractDataTransfer implements DataTransferInterface
{
    /**
     * @var bool
     */
    protected $modified = false;

    protected $modifiedProperties = [];

    public function fromArray(array $data): void
    {
        // TODO: Implement fromArray() method.
    }

    abstract public function getFields(): array;

    public function isModified(): bool
    {
        return $this->modified;
    }

    public function setModified(string $property): void
    {
        $this->modified = true;
        $this->modifiedProperties[] = $property;
    }

    public function modifiedToArray(): array
    {
        // TODO: Implement modifiedToArray() method.
    }

    public function toArray(): array
    {
        // TODO: Implement toArray() method.
    }
}
