<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Resolver\Config;


use OrbitCore\Infrastructure\Config\ConfigInterface;

interface ConfigResolverInterface
{
    /**
     * @throws \OrbitCore\Infrastructure\Resolver\Exception\ClassDoesNotExistException
     */
    public function resolve(object $source): ConfigInterface;
}
