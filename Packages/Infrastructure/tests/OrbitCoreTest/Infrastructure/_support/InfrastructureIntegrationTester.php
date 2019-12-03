<?php
namespace OrbitCoreTest\Infrastructure;

use Codeception\Stub;
use OrbitCore\Infrastructure\Config\ConfigInterface;
use OrbitCore\Infrastructure\Dependency\ProviderInterface;
use OrbitCore\Infrastructure\Factory\FactoryInterface;
use OrbitCore\Infrastructure\Resolver\Config\ConfigResolverInterface;
use OrbitCore\Infrastructure\Resolver\Dependency\DependencyProviderResolverInterface;
use OrbitCore\Infrastructure\Resolver\Factory\FactoryResolverInterface;
use OrbitCore\Infrastructure\Resolver\ResolverInterface;

class InfrastructureIntegrationTester extends \Codeception\Actor
{
    use _generated\InfrastructureIntegrationTesterActions;

   /**
    * Define custom actions here
    */
   public function createResolver()
   {
       return Stub::makeEmpty(
           ResolverInterface::class,
           [
               'getConfigResolver' => Stub\Expected::once($this->createConfigResolver()),
               'getDependencyProviderResolver' => Stub\Expected::once($this->createProviderResolver()),
               'getFactoryResolver' => Stub\Expected::once($this->createFactoryResolver())
           ]
       );
   }

   public function createProviderResolver()
   {
       $provider = Stub::makeEmpty(ProviderInterface::class);

       return Stub::makeEmpty(
           DependencyProviderResolverInterface::class,
           [
               'resolve' => Stub\Expected::once($provider)
           ]
       );
   }

   public function createConfigResolver()
   {
       $config = Stub::makeEmpty(ConfigInterface::class);

       return Stub::makeEmpty(
           ConfigResolverInterface::class,
           [
               'resolve' => Stub\Expected::once($config)
           ]
       );
   }

   public function createFactoryResolver()
   {
       $factory = Stub::makeEmpty(FactoryInterface::class);

       return Stub::makeEmpty(
           FactoryResolverInterface::class,
           [
               'resolve' => Stub\Expected::once($factory)
           ]
       );
   }
}
