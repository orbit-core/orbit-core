<?php
declare(strict_types=1);

namespace OrbitCore\DataTransfer;


use OrbitCore\Infrastructure\Config\AbstractConfig;

class DataTransferConfig extends AbstractConfig
{
    public const DATA_TRANSFER_GENERATE_PATH = 'DATA_TRANSFER_GENERATE_PATH';
    public const DATA_TRANSFER_NAMESPACE     = 'DATA_TRANSFER_NAMESPACE';
    public const DATA_TRANSFER_SCHEMA_PATH   = 'DATA_TRANSFER_SCHEMA_PATH';
    public const DATA_TRANSFER_TEMPLATE_PATH = 'DATA_TRANSFER_TEMPLATE_PATH';

    public function getGeneratePath(): string
    {
        return $this->get(static::DATA_TRANSFER_GENERATE_PATH);
    }

    public function getNamespace(): string
    {
        return $this->get(static::DATA_TRANSFER_NAMESPACE);
    }

    public function getSchemaPath(): string
    {
        return $this->get(static::DATA_TRANSFER_SCHEMA_PATH);
    }

    public function getTemplatePath(): string
    {
        return $this->get(static::DATA_TRANSFER_TEMPLATE_PATH);
    }
}
