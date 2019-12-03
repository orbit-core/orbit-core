<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Resolver\Dependency;


interface DependencyProviderResolverInterface
{
    /**
     * @throws \OrbitCore\Infrastructure\Resolver\Exception\ClassDoesNotExistException
     */
    public function resolve(object $source): DependencyProviderResolverInterface;
}
