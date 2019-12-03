<?php
declare(strict_types=1);

namespace OrbitCoreTest\Infrastructure\Integration;


use Codeception\Stub\Expected;
use Codeception\TestCase\Test;
use OrbitCore\Infrastructure\Config\ConfigInterface;
use OrbitCore\Infrastructure\Container\ContainerInterface;
use OrbitCore\Infrastructure\Factory\AbstractFactory;

/**
 * @group OrbitCore
 * @group Infrastructure
 * @group Integration
 * @group FactoryTest
 */
class FactoryTest extends Test
{
    /**
     * @var \OrbitCoreTest\Infrastructure\InfrastructureIntegrationTester
     */
    protected $tester;

    public function testGetConfig()
    {
        $factory = $this->make(AbstractFactory::class);
        $factory->setResolver(
            $this->tester->createResolver()
        );

        $this->assertInstanceOf(ConfigInterface::class, $factory->getConfig());
    }

    public function testGetDependency()
    {
        $dependencies = $this->makeEmpty(
            ContainerInterface::class,
            [
                'get' => Expected::once('bar')
            ]
        );

        $factory = $this->make(AbstractFactory::class);
        $factory->setResolver(
            $this->tester->createResolver()
        );
        $factory->setDependencyContainer($dependencies);

        $this->assertSame(
            'bar',
            $factory->getDependency('foo')
        );
    }
}
