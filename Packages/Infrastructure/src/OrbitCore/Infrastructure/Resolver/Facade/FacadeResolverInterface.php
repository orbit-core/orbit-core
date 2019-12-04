<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Resolver\Facade;


use OrbitCore\Infrastructure\Facade\FacadeInterface;

interface FacadeResolverInterface
{
    /**
     * @throws \OrbitCore\Infrastructure\Resolver\Exception\ClassDoesNotExistException
     */
    public function resolve(object $source): FacadeInterface;
}
