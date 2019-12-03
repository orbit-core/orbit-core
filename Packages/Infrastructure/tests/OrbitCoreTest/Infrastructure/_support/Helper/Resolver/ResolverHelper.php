<?php
declare(strict_types=1);

namespace OrbitCoreTest\Infrastructure\_support\Helper\Resolver;


use Codeception\Module;
use Codeception\Stub;
use OrbitCore\Infrastructure\Config\ConfigInterface;
use OrbitCore\Infrastructure\Dependency\ProviderInterface;
use OrbitCore\Infrastructure\Factory\FactoryInterface;
use OrbitCore\Infrastructure\Resolver\Config\ConfigResolverInterface;
use OrbitCore\Infrastructure\Resolver\Dependency\DependencyProviderResolverInterface;
use OrbitCore\Infrastructure\Resolver\Factory\FactoryResolverInterface;
use OrbitCore\Infrastructure\Resolver\ResolverInterface;

class ResolverHelper extends Module
{
    /**
     * @param \OrbitCore\Infrastructure\Config\ConfigInterface|null $config
     * @param \OrbitCore\Infrastructure\Dependency\ProviderInterface|null $provider
     * @param \OrbitCore\Infrastructure\Factory\FactoryInterface|null $factory
     *
     * @return \OrbitCore\Infrastructure\Resolver\ResolverInterface
     * @throws \Exception
     */
    public function createResolver(ConfigInterface $config = null, ProviderInterface $provider = null, FactoryInterface $factory = null)
    {
        return Stub::makeEmpty(
            ResolverInterface::class,
            [
                'getConfigResolver' => function () use ($config) {
                    return $this->createConfigResolver($config);
                },
                'getDependencyProviderResolver' => function () use ($provider) {
                    return $this->createDependencyResolver($provider);
                },
                'getFactoryResolver' => function () use ($factory) {
                    return $this->createFactoryResolver($factory);
                }
            ]
        );
    }

    /**
     * @param \OrbitCore\Infrastructure\Config\ConfigInterface|null $config
     *
     * @return \OrbitCore\Infrastructure\Resolver\Config\ConfigResolverInterface
     * @throws \Exception
     */
    public function createConfigResolver(ConfigInterface $config = null)
    {
        return Stub::makeEmpty(
            ConfigResolverInterface::class,
            [
                'resolve' => function ($source) use ($config) {
                    return ($config === null) ? Stub::makeEmpty(ConfigInterface::class) : $config;
                }
            ]
        );
    }

    /**
     * @param \OrbitCore\Infrastructure\Dependency\ProviderInterface|null $provider
     *
     * @return \OrbitCore\Infrastructure\Resolver\Dependency\DependencyProviderResolverInterface
     * @throws \Exception
     */
    public function createDependencyResolver(ProviderInterface $provider = null)
    {
        return Stub::makeEmpty(
            DependencyProviderResolverInterface::class,
            [
                'resolve' => function ($source) use ($provider) {
                    return ($provider === null) ? Stub::makeEmpty(ProviderInterface::class) : $provider;
                }
            ]
        );
    }

    /**
     * @param \OrbitCore\Infrastructure\Factory\FactoryInterface|null $factory
     *
     * @return \OrbitCore\Infrastructure\Resolver\Factory\FactoryResolverInterface
     * @throws \Exception
     */
    public function createFactoryResolver(FactoryInterface $factory = null)
    {
        return Stub::makeEmpty(
            FactoryResolverInterface::class,
            [
                'resolve' => function ($source) use ($factory) {
                    return ($factory === null) ? Stub::makeEmpty(FactoryInterface::class) : $factory;
                }
            ]
        );
    }
}
