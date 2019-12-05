<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Facade;


use OrbitCore\Infrastructure\Config\ConfigInterface;
use OrbitCore\Infrastructure\Factory\FactoryInterface;

interface FacadeInterface
{
    public function getFactory(): FactoryInterface;
}
