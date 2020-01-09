<?php
declare(strict_types=1);

namespace OrbitCoreTest\DataTransfer\Domain\Builder;


use Codeception\TestCase\Test;
use OrbitCore\DataTransfer\Domain\Builder\BuilderFactory;
use OrbitCore\DataTransfer\Domain\Builder\TransferBuilder;
use OrbitCore\DataTransfer\Domain\Processor\Config\DataTransferConfigInterface;

/**
 * @group OrbitCore
 * @group DataTransfer
 * @group Domain
 * @group Builder
 * @group TransferBuilder
 * @group Integration
 */
class TransferBuilderTest extends Test
{
    public function testTransferBuilding()
    {
        $transferBuilder = new TransferBuilder(
            new BuilderFactory()
        );

        $config = $this->makeEmpty(DataTransferConfigInterface::class);

        $transferBuilder->transfer('testOne', $config)->property('propOne')->setType('int');
        $transferBuilder->transfer('testOne', $config)->property('propTwo')->setType('bool')->allowNull();
        $transferBuilder->transfer('testOne', $config)->property('propThree')->setType('string')->isCollection();
        $transferBuilder->transfer('testTwo', $config)->property('secondTransferProperty')->setType('testOne')->allowNull();

        $this->assertEquals(
            [
                'testOne' => [
                    'propOne' => [
                        'allowNull' => false,
                        'isCollection' => false,
                        'type' => 'int'
                    ],
                    'propTwo' => [
                        'allowNull' => true,
                        'isCollection' => false,
                        'type' => 'bool'
                    ],
                    'propThree' => [
                        'allowNull' => false,
                        'isCollection' => true,
                        'type' => 'string'
                    ]
                ],
                'testTwo' => [
                    'secondTransferProperty' => [
                        'allowNull' => true,
                        'isCollection' => false,
                        'type' => 'testOne'
                    ]
                ]
            ],
            $transferBuilder->getData()
        );
    }
}
