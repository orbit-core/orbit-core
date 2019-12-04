<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Config;


class AbstractConfig implements ConfigInterface
{
    /**
     * @var \OrbitCore\Infrastructure\Config\ConfigInterface
     */
    protected $container;

    public function setConfig(ConfigBridgeInterface $config): void
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
