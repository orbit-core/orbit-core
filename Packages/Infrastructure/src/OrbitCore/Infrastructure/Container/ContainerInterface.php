<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Container;


use OrbitCore\Infrastructure\Resolver\ResolverInterface;

interface ContainerInterface
{
    /**
     * @throws \OrbitCore\Infrastructure\Container\Exception\DependencyNotExistException
     */
    public function get(string $name);

    public function getResolver(): ResolverInterface;

    public function set(string $name, $dependency): ContainerInterface;
}
