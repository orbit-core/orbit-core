<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Config;


interface ConfigBridgeInterface
{
    public function get(string $name);
}
