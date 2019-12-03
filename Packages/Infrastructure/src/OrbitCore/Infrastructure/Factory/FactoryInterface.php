<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Factory;


use OrbitCore\Infrastructure\Config\ConfigInterface;

interface FactoryInterface
{
    public function getConfig(): ConfigInterface;

    /**
     * @throws \OrbitCore\Infrastructure\Container\Exception\DependencyNotExistException
     */
    public function getDependency(string $name);
}
