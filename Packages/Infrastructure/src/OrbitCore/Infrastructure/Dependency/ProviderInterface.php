<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Dependency;


use OrbitCore\Infrastructure\Container\ContainerInterface;

interface ProviderInterface
{
    public function provideDependencies(ContainerInterface $container): ContainerInterface;
}
