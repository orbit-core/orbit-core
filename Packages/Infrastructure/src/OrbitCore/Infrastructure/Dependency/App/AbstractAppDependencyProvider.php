<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Dependency\App;


use OrbitCore\Infrastructure\Container\ContainerInterface;
use OrbitCore\Infrastructure\Dependency\ProviderInterface;

abstract class AbstractAppDependencyProvider implements ProviderInterface
{
    abstract public function provideAppDependencies(ContainerInterface $container): ContainerInterface;

    public function provideDependencies(ContainerInterface $container): ContainerInterface
    {
        $container = $this->provideAppDependencies($container);

        return $container;
    }
}
