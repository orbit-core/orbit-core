<?php
declare(strict_types=1);

namespace OrbitCore\Kernel\Domain\Resolver\Facade;


use OrbitCore\Infrastructure\Facade\FacadeInterface;
use OrbitCore\Infrastructure\Resolver\Facade\FacadeResolverInterface;
use OrbitCore\Kernel\Domain\Resolver\Resolver;

trait FacadeResolverTrait
{
    public function getFacade(): FacadeInterface
    {
        return $this->getFacadeResolver()->resolve($this);
    }

    protected function getFacadeResolver(): FacadeResolverInterface
    {
        return (new Resolver())->getFacadeResolver();
    }
}
