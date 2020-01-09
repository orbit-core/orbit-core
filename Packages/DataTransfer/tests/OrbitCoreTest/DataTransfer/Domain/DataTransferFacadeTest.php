<?php
declare(strict_types=1);

namespace OrbitCoreTest\DataTransfer\Domain;


use Codeception\TestCase\Test;
use OrbitCore\DataTransfer\Domain\DataTransferDomainDependencyProvider;
use OrbitCoreTest\DataTransfer\Domain\Helper\DataTransferTestConfig;

class DataTransferFacadeTest extends Test
{
    /**
     * @var \OrbitCoreTest\DataTransfer\DataTransferDomainTester
     */
    protected $tester;

    public function testGenerateDataTransferObjects()
    {
        $facade = $this->tester->createFacade(
            [
                DataTransferDomainDependencyProvider::DATA_TRANSFER_CONFIG_PLUGINS => [
                    new DataTransferTestConfig()
                ]
            ]
        );

        $facade->generateDataTransferObjects();
    }

}
