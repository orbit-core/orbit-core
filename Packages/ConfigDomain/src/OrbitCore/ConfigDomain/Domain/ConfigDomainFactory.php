<?php
declare(strict_types=1);

namespace OrbitCore\ConfigDomain\Domain;

use OrbitCore\ConfigDomain\Domain\Hydrator\ConfigDataHydrator;
use OrbitCore\ConfigDomain\Domain\Hydrator\ConfigDataHydratorInterface;
use OrbitCore\Infrastructure\Config\ContainterInterface;
use OrbitCore\Infrastructure\Factory\Domain\AbstractDomainFactory;

class ConfigDomainFactory extends AbstractDomainFactory implements ConfigDomainFactoryInterface
{
    /**
     * @var \OrbitCore\Infrastructure\Config\ContainterInterface
     */
    protected $container;

    public function getContainer(): ContainterInterface
    {
        return $this->getDependency(ConfigDependencyProvider::CONFIG_CONTAINER);
    }

    public function createHydrator(): ConfigDataHydratorInterface
    {
        return new ConfigDataHydrator(
            $this->getContainer(),
            $this->getDependency(ConfigDependencyProvider::CONFIG_DATA_HYDRATOR_PLUGINS)
        );
    }
}
