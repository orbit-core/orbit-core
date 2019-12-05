<?php
declare(strict_types=1);

namespace OrbitCore\Kernel\Domain;


use OrbitCore\Infrastructure\Container\ContainerInterface;
use OrbitCore\Infrastructure\Facade\AbstractFacade;

class KernelFacade extends AbstractFacade implements KernelFacadeInterface
{
    public function getDependencyContainer(): ContainerInterface
    {
        $this->getFactory()
             ->getDependencyContainer();
    }
}
