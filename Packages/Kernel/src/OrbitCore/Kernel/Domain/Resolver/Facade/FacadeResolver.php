<?php
declare(strict_types=1);

namespace OrbitCore\Kernel\Domain\Resolver\Facade;


use OrbitCore\Infrastructure\Facade\FacadeInterface;
use OrbitCore\Infrastructure\Resolver\Facade\FacadeResolverInterface;
use OrbitCore\Kernel\Domain\Resolver\AbstractClassResolver;

class FacadeResolver extends AbstractClassResolver implements FacadeResolverInterface
{
    protected const CLASS_PATTERN = '%s\\%s\\Domain\\%sFacade';

    protected static $cache = [];

    /**
     * @inheritDoc
     */
    public function resolve(object $source): FacadeInterface
    {
        $matadata = $this->metadataReader->getMetadata($source);

        if (!isset(static::$cache[$metadata['path']])) {
            $location = [
                $matadata['package'],
                $matadata['package']
            ];
            $facade = $this->resolveClass(static::CLASS_PATTERN, ...$location);

            $facade = new $facade();

            static::$cache[$matadata['path']] = $facade;
        }

        return static::$cache[$matadata['path']];
    }
}
