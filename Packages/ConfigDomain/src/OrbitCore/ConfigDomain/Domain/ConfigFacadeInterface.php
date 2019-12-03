<?php
declare(strict_types=1);

namespace OrbitCore\ConfigDomain\Domain;


interface ConfigFacadeInterface
{
    public function getConfigValue(string $name);

    public function init(): void;
}
