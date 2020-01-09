<?php
declare(strict_types=1);

namespace OrbitCoreTest\DataTransfer\Domain;


use Codeception\TestCase\Test;
use OrbitCore\DataTransfer\Domain\DataTransferDomainDependencyProvider;
use OrbitCoreTest\DataTransfer\Domain\Generate\ExampleDto;
use OrbitCoreTest\DataTransfer\Domain\Generate\SecondTestDto;
use OrbitCoreTest\DataTransfer\Domain\Helper\DataTransferTestConfig;

class DataTransferFacadeTest extends Test
{
    /**
     * @var \OrbitCoreTest\DataTransfer\DataTransferDomainTester
     */
    protected $tester;

    public function testGenerateAndDeleteDto()
    {
        $facade = $this->tester->createFacade(
            [
                DataTransferDomainDependencyProvider::DATA_TRANSFER_CONFIG_PLUGINS => [
                    new DataTransferTestConfig()
                ]
            ]
        );

        $facade->generateDataTransferObjects();

        $this->assertFileExists(__DIR__ . '/Generate/ExampleDto.php');
        $this->assertFileExists(__DIR__ . '/Generate/SecondTestDto.php');

        $this->assertTrue(
            class_exists(ExampleDto::class)
        );
        $this->assertTrue(
            class_exists(SecondTestDto::class)
        );


        $facade->deleteDataTransferObjects();

        $this->assertFileNotExists(__DIR__ . '/Generate/ExampleDto.php');
        $this->assertFileNotExists(__DIR__ . '/Generate/SecondTestDto.php');
    }

}