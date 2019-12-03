<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Config;


use OrbitCore\Infrastructure\Config\Exception\ConfigNotExistException;

class AbstractConfig implements ConfigInterface
{
    /**
     * @var \OrbitCore\Infrastructure\Config\ConfigInterface
     */
    protected $container;

    /**
     * @param \OrbitCore\Infrastructure\Config\ConfigInterface $config
     */
    public function setConfig(ConfigInterface $config): void
    {
        $this->container = $config;
    }

    /**
     * @inheritDoc
     */
    public function get(string $name)
    {
        return $this->container->get($name);
    }
}
