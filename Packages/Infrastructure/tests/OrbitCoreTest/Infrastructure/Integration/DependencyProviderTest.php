<?php
declare(strict_types=1);

namespace OrbitCoreTest\Infrastructure\Integration;


use Codeception\Stub\Expected;
use Codeception\TestCase\Test;
use OrbitCore\Infrastructure\Container\ContainerInterface;
use OrbitCore\Infrastructure\Dependency\App\AbstractAppDependencyProvider;
use OrbitCore\Infrastructure\Dependency\Domain\AbstractDomainDependencyProvider;

/**
 * @group OrbitCore
 * @group Infrastructure
 * @group Integration
 * @group DependencyProviderTest
 */
class DependencyProviderTest extends Test
{
    public function testAppDependencyProvider()
    {
        $container = $this->makeEmpty(ContainerInterface::class);

        $appDependencyProvider = $this->make(
            AbstractAppDependencyProvider::class,
            [
                'provideAppDependencies' => Expected::once($container)
            ]
        );


        $appDependencyProvider->provideDependencies($container);
    }

    public function testDomainDependencyProvider()
    {
        $container = $this->makeEmpty(ContainerInterface::class);

        $domainDependencyProvider = $this->make(
            AbstractDomainDependencyProvider::class,
            [
                'provideDomainDependencies' => Expected::once($container)
            ]
        );


        $domainDependencyProvider->provideDependencies($container);
    }
}
