<?php
declare(strict_types=1);

namespace OrbitCoreTest\ConfigDomain\Domain;


use Codeception\TestCase\Test;
use OrbitCore\ConfigDomain\ConfigDomainConfig;
use OrbitCore\ConfigDomain\Domain\ConfigDependencyProvider;
use OrbitCore\ConfigDomain\Domain\ConfigDomainFactory;
use OrbitCore\ConfigDomain\Domain\ConfigFacade;
use OrbitCore\ConfigDomain\Domain\Container\ConfigContainer;
use OrbitCoreTest\ConfigDomain\Domain\Hydrator\TestConfigDataHydratorPlugin;

class FacadeTest extends Test
{
    /**
     * @var \OrbitCoreTest\ConfigDomain\ConfigDomainDomainTester
     */
    protected $tester;

    public function testIntegration()
    {
        $container = new ConfigContainer();

        $facade = $this->tester->createFacade(
            [
                ConfigDependencyProvider::CONFIG_CONTAINER => $container,
                ConfigDependencyProvider::CONFIG_DATA_HYDRATOR_PLUGINS => [
                    new TestConfigDataHydratorPlugin()
                ]
            ]
        );

        $facade->init();

        $this->assertSame(
            'bar',
            $facade->getConfigValue('foo')
        );
    }


}
