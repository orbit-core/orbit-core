<?php
declare(strict_types=1);

namespace OrbitCore\Kernel\Domain\Resolver;


use OrbitCore\Infrastructure\Resolver\Exception\ClassDoesNotExistException;
use OrbitCore\Kernel\Adapter\Config\ConfigAdapter;
use OrbitCore\Kernel\KernelConfig;

abstract class AbstractClassResolver
{
    /**
     * @var \OrbitCore\Kernel\Domain\Resolver\ClassMetadataReaderInterface
     */
    protected $metadataReader;

    /**
     * @var array
     */
    protected $namespaces;

    /**
     * AbstractClassResolver constructor.
     *
     * @param \OrbitCore\Kernel\Domain\Resolver\ClassMetadataReaderInterface $metadataReader
     * @param array $namespaces
     */
    public function __construct(
        ClassMetadataReaderInterface $metadataReader,
        array $namespaces = null
    ) {
        $this->metadataReader = $metadataReader;
        $this->namespaces = $namespaces ?: ConfigAdapter::getConfig()->getConfigValue(KernelConfig::KERNEL_NAMESPACES);
    }

    /**
     * @throws \OrbitCore\Infrastructure\Resolver\Exception\ClassDoesNotExistException
     */
    public function resolveClass(string $pattern, string ...$metadata): string
    {
        $className = 'namespace config missing';

        foreach ($this->namespaces as $namespace) {
            $className = sprintf(
                $pattern,
                $namespace,
                ...$metadata
            );

            if (class_exists($className)) {
                return $className;
            }
        }

        throw new ClassDoesNotExistException(sprintf(
            'Class "%s" does not exist',
            $className
        ));
    }
}
