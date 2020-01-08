<?php
declare(strict_types=1);

namespace OrbitCore\DataTransfer\Domain\Parser\Plugin;


use OrbitCore\DataTransfer\Domain\Builder\TransferBuilderInterface;

interface SchemaFileParserPluginInterface
{
    public function parseSchemaFile(string $schemaFilePath, TransferBuilderInterface $generator): TransferBuilderInterface;
}
