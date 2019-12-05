<?php
declare(strict_types=1);

namespace OrbitCoreTest\Kernel\Domain\Resolver\Facade;


use Codeception\TestCase\Test;
use OrbitCore\Kernel\Domain\KernelFacade;
use OrbitCore\Kernel\Domain\Resolver\ClassMetadataReader;
use OrbitCore\Kernel\Domain\Resolver\Facade\FacadeResolver;
use OrbitCore\Kernel\KernelConfig;

class FacadeResolverTest extends Test
{
    public function testResolveConfig()
    {
        $resolver = new FacadeResolver(
            new ClassMetadataReader(),
            [
                'OrbitCore'
            ]
        );

        $facade = $resolver->resolve($this);

        $this->assertInstanceOf(
            KernelFacade::class,
            $facade
        );

        $this->assertInstanceOf(
            KernelConfig::class,
            $facade->getConfig()
        );
    }
}
