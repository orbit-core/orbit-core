<?php
declare(strict_types=1);

namespace OrbitCoreTest\Config\Domain;


use Codeception\TestCase\Test;
use OrbitCore\Config\Domain\ConfigDomainFactoryInterface;

class ConfigDomainFactoryTest extends Test
{
    public function testInterfaceExist()
    {
        $this->assertTrue(
            interface_exists(ConfigDomainFactoryInterface::class)
        );
    }
}
