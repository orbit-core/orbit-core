<?php
declare(strict_types=1);

namespace OrbitCoreTest\Infrastructure\Integration;


use Codeception\TestCase\Test;
use OrbitCore\Infrastructure\Config\ConfigInterface;
use OrbitCore\Infrastructure\Dependency\ProviderInterface;
use OrbitCore\Infrastructure\Factory\AbstractFactory;
use OrbitCore\Infrastructure\Factory\FactoryInterface;

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
        $factory = $this->make(AbstractFactory::class);
        $factory->setResolver(
            $this->tester->createResolver()
        );

        $this->assertInstanceOf(ProviderInterface::class, $factory->getDependency('name'));
    }
}
