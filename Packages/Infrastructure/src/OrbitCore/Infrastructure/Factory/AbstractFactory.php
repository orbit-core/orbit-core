<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Factory;


use OrbitCore\Infrastructure\Config\ConfigInterface;
use OrbitCore\Infrastructure\Resolver\ResolverInterface;

abstract class AbstractFactory implements FactoryInterface
{
    /**
     * @var \OrbitCore\Infrastructure\Resolver\ResolverInterface
     */
    protected $resolver;

    public function getConfig(): ConfigInterface
    {
        return $this->resolver->getConfigResolver()->resolve($this);
    }

    public function getDependency(string $name)
    {
        return $this->resolver->getDependencyProviderResolver()->resolve($this);
    }

    public function setResolver(ResolverInterface $resolver): void
    {
        $this->resolver = $resolver;
    }
}
