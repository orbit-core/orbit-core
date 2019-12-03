<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Resolver\Factory;


use OrbitCore\Infrastructure\Factory\FactoryInterface;

interface FactoryResolverInterface
{
    /**
     * @throws \OrbitCore\Infrastructure\Resolver\Exception\ClassDoesNotExistException
     */
    public function resolve(object $source): FactoryInterface;
}
