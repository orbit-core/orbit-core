<?php
declare(strict_types=1);

namespace OrbitCore\ConfigDomain\Domain\Plugin;


use OrbitCore\Infrastructure\Config\ContainterInterface;

interface ConfigDataHydratorPluginInterface
{
    public function hydrateConfigData(ContainterInterface $containter): ContainterInterface;
}
