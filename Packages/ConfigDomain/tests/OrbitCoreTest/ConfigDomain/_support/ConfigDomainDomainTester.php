<?php

namespace OrbitCoreTest\ConfigDomain;

use Codeception\Stub;
use OrbitCore\ConfigDomain\Domain\ConfigDependencyProvider;
use OrbitCore\ConfigDomain\Domain\ConfigDomainFactory;
use OrbitCore\ConfigDomain\Domain\ConfigFacade;
use OrbitCore\Infrastructure\Container\ContainerInterface;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
 */
class ConfigDomainDomainTester extends \Codeception\Actor
{
    use _generated\ConfigDomainDomainTesterActions;

    public function createFacade(array $dependencies = [])
    {
        $factory = $this->createFactory($dependencies);

        $facade = new ConfigFacade();
        $facade->setResolver(
            $this->createResolver(
                null,
                null,
                $factory
            )
        );

        return $facade;
    }

    /**
     * @param array $dependencies
     *
     * @return \OrbitCore\ConfigDomain\Domain\ConfigDomainFactory
     * @throws \Exception
     */
    public function createFactory(array $dependencies = [])
    {
        $factory = new ConfigDomainFactory();
        $factory->setResolver(
            $this->createResolver(
                null,
                new ConfigDependencyProvider(),
                null
            )
        );

        $container = Stub::makeEmpty(
            ContainerInterface::class,
            [
                'get' => function ($name) use ($dependencies) {
                    return $dependencies[$name] ?? null;
                }
            ]
        );


        $factory->setDependencyContainer($container);

        return $factory;
    }
}
