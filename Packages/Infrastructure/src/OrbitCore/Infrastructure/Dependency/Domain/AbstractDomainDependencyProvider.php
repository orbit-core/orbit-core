<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Dependency\Domain;


use OrbitCore\Infrastructure\Container\ContainerInterface;
use OrbitCore\Infrastructure\Dependency\ProviderInterface;

abstract class AbstractDomainDependencyProvider implements ProviderInterface
{
    public function provideDependencies(ContainerInterface $container): ContainerInterface
    {
        $container = $this->provideDomainDependencies($container);

        return $container;
    }

    abstract public function provideDomainDependencies(ContainerInterface $container): ContainerInterface;
}
