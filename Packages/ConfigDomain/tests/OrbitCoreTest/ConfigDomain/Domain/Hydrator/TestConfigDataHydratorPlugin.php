<?php
declare(strict_types=1);

namespace OrbitCoreTest\ConfigDomain\Domain\Hydrator;


use OrbitCore\ConfigDomain\Domain\Plugin\ConfigDataHydratorPluginInterface;
use OrbitCore\Infrastructure\Config\ContainterInterface;

class TestConfigDataHydratorPlugin implements ConfigDataHydratorPluginInterface
{
    public function hydrateConfigData(ContainterInterface $containter): ContainterInterface
    {
        $containter->set('foo', 'bar');

        return $containter;
    }
}
