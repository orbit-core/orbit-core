<?php
declare(strict_types=1);

namespace OrbitCore\Kernel\Domain\Dependency;


use OrbitCore\Infrastructure\Container\ContainerInterface;
use OrbitCore\Infrastructure\Resolver\ResolverInterface;

class Container implements ContainerInterface
{
    /**
     * @var ResolverInterface
     */
    protected $resolver;

    public function __construct(ResolverInterface $resolver)
    {
        $this->resolver = $resolver;
    }

    public function getResolver(): ResolverInterface
    {
        return $this->resolver;
    }

    public function get(string $name)
    {
        // TODO: Implement get() method.
    }

    public function set(string $name, $dependency): ContainerInterface
    {
        // TODO: Implement set() method.
    }
}
