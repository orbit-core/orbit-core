<?php
declare(strict_types=1);

namespace OrbitCore\DataTransfer\Domain\Builder\Type;


use OrbitCore\DataTransfer\Domain\Builder\BuilderFactoryInterface;

class TransferType implements TransferTypeInterface
{
    /**
     * @var \OrbitCore\DataTransfer\Domain\Builder\BuilderFactoryInterface
     */
    protected $factory;

    /**
     * @var \OrbitCore\DataTransfer\Domain\Builder\Type\PropertyType[]
     */
    protected $properties;

    /**
     * @var string
     */
    protected $name;

    /**
     * TransferType constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->properties = [];
    }

    public function getData(): array
    {
        return array_map(
            function (PropertyTypeInterface $property) {
                return $property->getData();
            },
            $this->properties
        );
    }

    public function property(string $name): PropertyTypeInterface
    {
        if (!isset($this->properties[$name])) {
            $this->properties[$name] = $this->factory->createPropertyType($name);
        }

        return $this->properties[$name];
    }

    public function setBuilderFactory(BuilderFactoryInterface $factory): TypeInterface
    {
        $this->factory = $factory;

        return $this;
    }

}
