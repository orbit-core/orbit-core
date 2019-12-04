<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Resolver;


use OrbitCore\Infrastructure\Resolver\Config\ConfigResolverInterface;
use OrbitCore\Infrastructure\Resolver\Dependency\DependencyProviderResolverInterface;
use OrbitCore\Infrastructure\Resolver\Facade\FacadeResolverInterface;
use OrbitCore\Infrastructure\Resolver\Factory\FactoryResolverInterface;

interface ResolverInterface
{
    public function getConfigResolver(): ConfigResolverInterface;

    public function getDependencyProviderResolver(): DependencyProviderResolverInterface;

    public function getFactoryResolver(): FactoryResolverInterface;

    public function getFacadeResolver(): FacadeResolverInterface;
}
