<?php
declare(strict_types=1);

namespace OrbitCore\Kernel\Domain;


use OrbitCore\Infrastructure\Container\ContainerInterface;
use OrbitCore\Infrastructure\Resolver\ResolverInterface;
use OrbitCore\Kernel\Domain\Dependency\Container;
use OrbitCore\Kernel\Domain\Dependency\ContainerBuilder;
use OrbitCore\Kernel\Domain\Dependency\ContainerBuilderInterface;
use OrbitCore\Kernel\Domain\Resolver\Resolver;

class KernelDomainFactory implements KernelDomainFactoryInterface
{
    public function createDependencyContainer(): ContainerInterface
    {
        return new Container(
            $this->createResolver()
        );
    }

    public function createDependencyContainerBuilder(): ContainerBuilderInterface
    {
        return new ContainerBuilder(
            $this->createDependencyContainer(),
            $this->getDependencyHydratorPlugins()
        );
    }

    public function createResolver(): ResolverInterface
    {
        return new Resolver();
    }

    /**
     * @return \OrbitCore\Kernel\Domain\Dependency\Plugin\DependencyHydratorPluginInterface[]
     */
    public function getDependencyHydratorPlugins(): array
    {
        return [];
    }
}
