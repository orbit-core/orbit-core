<?php
declare(strict_types=1);

namespace OrbitCoreTest\Infrastructure\Integration;


use Codeception\TestCase\Test;
use OrbitCore\Infrastructure\Config\ConfigInterface;
use OrbitCore\Infrastructure\Facade\AbstractFacade;
use OrbitCore\Infrastructure\Factory\FactoryInterface;

/**
 * @group OrbitCore
 * @group Infrastructure
 * @group Integration
 * @group FacadeTest
 */
class FacadeTest extends Test
{
    /**
     * @var \OrbitCoreTest\Infrastructure\InfrastructureIntegrationTester
     */
    protected $tester;

    public function testGetFactory()
    {
        $facade = $this->make(AbstractFacade::class);
        $facade->setResolver(
            $this->tester->createResolver()
        );

        $this->assertInstanceOf(FactoryInterface::class, $facade->getFactory());
    }
}
