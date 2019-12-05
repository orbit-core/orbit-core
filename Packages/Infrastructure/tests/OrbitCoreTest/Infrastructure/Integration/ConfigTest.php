<?php
declare(strict_types=1);

namespace OrbitCoreTest\Infrastructure\Integration;


use Codeception\Stub\Expected;
use Codeception\TestCase\Test;
use OrbitCore\Infrastructure\Config\AbstractConfig;
use OrbitCore\Infrastructure\Config\ConfigBridgeInterface;

/**
 * @group OrbitCore
 * @group Infrastructure
 * @group Integration
 * @group ConfigTest
 */
class ConfigTest extends Test
{
    /**
     * @var \OrbitCoreTest\Infrastructure\InfrastructureIntegrationTester
     */
    protected $tester;

    public function testConfig()
    {
        $config = $this->make(AbstractConfig::class);
        $config->setConfig(
            $this->makeEmpty(
                ConfigBridgeInterface::class,
                [
                    'get' => Expected::once('bar')
                ]
            )
        );

        $this->assertSame(
            'bar',
            $config->get('foo')
        );
    }
}
