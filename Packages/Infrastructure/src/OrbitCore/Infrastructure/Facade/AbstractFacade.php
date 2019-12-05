<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Facade;


use OrbitCore\Infrastructure\Config\ConfigInterface;
use OrbitCore\Infrastructure\Factory\FactoryInterface;
use OrbitCore\Infrastructure\Resolver\ResolverInterface;

abstract class AbstractFacade implements FacadeInterface
{
    /**
     * @var \OrbitCore\Infrastructure\Resolver\ResolverInterface
     */
    protected $resolver;

    public function getFactory(): FactoryInterface
    {
        return $this->resolver->getFactoryResolver()->resolve($this);
    }

    public function setResolver(ResolverInterface $resolver): void
    {
        $this->resolver = $resolver;
    }
}
