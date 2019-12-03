<?php
declare(strict_types=1);

namespace OrbitCore\Infrastructure\Config;


interface ContainterInterface
{
    /**
     * @throws \OrbitCore\Infrastructure\Config\Exception\ConfigNotExistException
     */
    public function get(string $name);

    public function set(string $name, $config);
}
