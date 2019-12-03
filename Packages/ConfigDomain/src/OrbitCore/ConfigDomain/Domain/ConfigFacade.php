<?php
declare(strict_types=1);

namespace OrbitCore\ConfigDomain\Domain;


use OrbitCore\Infrastructure\Facade\AbstractFacade;
use OrbitCore\Infrastructure\Factory\FactoryInterface;

/**
 * @method \OrbitCore\ConfigDomain\Domain\ConfigDomainFactory getFactory()
 */
class ConfigFacade extends AbstractFacade implements ConfigFacadeInterface
{
    public function getConfigValue(string $name)
    {
        return $this->getFactory()
                    ->getContainer()
                    ->get($name);
    }

    public function init(): void
    {
        $this->getFactory()
             ->createHydrator()
             ->hydrateConfigData();
    }
}
