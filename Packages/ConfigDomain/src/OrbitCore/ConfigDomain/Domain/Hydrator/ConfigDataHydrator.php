<?php
declare(strict_types=1);

namespace OrbitCore\ConfigDomain\Domain\Hydrator;


use OrbitCore\Infrastructure\Config\ContainterInterface;

class ConfigDataHydrator implements ConfigDataHydratorInterface
{
    /**
     * @var \OrbitCore\Infrastructure\Config\ContainterInterface
     */
    protected $container;

    /**
     * @var \OrbitCore\ConfigDomain\Domain\Plugin\ConfigDataHydratorPluginInterface[]
     */
    protected $hydratorPlugins;

    /**
     * ConfigDataHydrator constructor.
     *
     * @param \OrbitCore\Infrastructure\Config\ContainterInterface $container
     * @param \OrbitCore\ConfigDomain\Domain\Plugin\ConfigDataHydratorPluginInterface[] $hydratorPlugins
     */
    public function __construct(ContainterInterface $container, array $hydratorPlugins)
    {
        $this->container = $container;
        $this->hydratorPlugins = $hydratorPlugins;
    }

    public function hydrateConfigData(): void
    {
        foreach ($this->hydratorPlugins as $hydratorPlugin) {
            $this->container = $hydratorPlugin->hydrateConfigData($this->container);
        }
    }
}
