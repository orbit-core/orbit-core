<?php declare(strict_types=1);

use \OrbitCore\DataTransfer\Domain\DataTransfer\AbstractDataTransfer;
use \OrbitCore\DataTransfer\Domain\DataTransfer\RequiredPropertyNotDefinedException;

class {% transferName %}Dto extends AbstractDataTransfer
{
    {% properties %}

    {% methods %}

    public function getFields(): array
    {
        return {% transferData %};
    }
}
