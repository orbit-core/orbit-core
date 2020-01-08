<?php
declare(strict_types=1);

namespace OrbitCore\DataTransfer\Domain\Parser\Plugin;


use OrbitCore\DataTransfer\Domain\Generator\GeneratorInterface;

interface SchemaFileParserPluginInterface
{
    public function parseSchemaFile(string $schemaFilePath, GeneratorInterface $generator): GeneratorInterface;
}
