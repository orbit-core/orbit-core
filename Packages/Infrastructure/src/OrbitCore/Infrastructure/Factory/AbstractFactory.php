<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Factory;


use OrbitCore\Infrastructure\Config\ConfigInterface;
use OrbitCore\Infrastructure\Container\ContainerInterface;
use OrbitCore\Infrastructure\Resolver\ResolverInterface;

abstract class AbstractFactory implements FactoryInterface
{
    /**
     * @var \OrbitCore\Infrastructure\Resolver\ResolverInterface
     */
    protected $resolver;

    /**
     * @var \OrbitCore\Infrastructure\Container\ContainerInterface
     */
    protected $dependencyContainer;

    public function getConfig(): ConfigInterface
    {
        return $this->resolver->getConfigResolver()->resolve($this);
    }

    public function getDependency(string $name)
    {
        return $this->dependencyContainer->get($name);
    }

    public function setResolver(ResolverInterface $resolver): void
    {
        $this->resolver = $resolver;
    }

    public function setDependencyContainer(ContainerInterface $dependencyContainer): void
    {
        $this->dependencyContainer = $dependencyContainer;
    }
}
