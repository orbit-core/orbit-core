<?php
declare(strict_types=1);

namespace OrbitCore\DataTransfer\Domain;


use OrbitCore\Infrastructure\Container\ContainerInterface;
use OrbitCore\Infrastructure\Dependency\Domain\AbstractDomainDependencyProvider;

class DataTransferDomainDependencyProvider extends AbstractDomainDependencyProvider
{
    public function provideDomainDependencies(ContainerInterface $container): ContainerInterface
    {


        return $container;
    }
}
