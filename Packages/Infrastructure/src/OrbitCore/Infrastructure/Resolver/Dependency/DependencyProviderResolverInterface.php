<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Resolver\Dependency;


use OrbitCore\Infrastructure\Dependency\ProviderInterface;

interface DependencyProviderResolverInterface
{
    /**
     * @throws \OrbitCore\Infrastructure\Resolver\Exception\ClassDoesNotExistException
     */
    public function resolve(object $source): ProviderInterface;
}
