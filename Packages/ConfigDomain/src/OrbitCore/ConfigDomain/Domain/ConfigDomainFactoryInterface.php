<?php
declare(strict_types=1);

namespace OrbitCore\ConfigDomain\Domain;


use OrbitCore\Infrastructure\Config\ContainterInterface;

interface ConfigDomainFactoryInterface
{
    public function getContainer(): ContainterInterface;
}
