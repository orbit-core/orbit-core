<?php
declare(strict_types=1);

namespace OrbitCore\ConfigDomain\Domain;


use OrbitCore\Infrastructure\Config\ContainterInterface;

interface ConfigDomainDomainFactoryInterface
{
    public function getContainer(): ContainterInterface;
}
