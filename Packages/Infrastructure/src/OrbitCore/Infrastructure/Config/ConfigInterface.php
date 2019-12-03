<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Config;


interface ConfigInterface
{
    /**
     * @throws \OrbitCore\Infrastructure\Config\Exception\ConfigNotExistException
     */
    public function get(string $name);
}
