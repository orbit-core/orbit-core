<?php
declare(strict_types=1);

namespace OrbitCore\Kernel\Adapter\Config;


use OrbitCore\ConfigDomain\Domain\ConfigDomainDomainFacade;
use OrbitCore\ConfigDomain\Domain\ConfigDomainFacadeInterface;
use OrbitCore\Infrastructure\Config\ConfigBridgeInterface;
use OrbitCore\Kernel\Domain\Resolver\Facade\FacadeResolverTrait;
use OrbitCore\Kernel\Domain\Resolver\Resolver;

class ConfigAdapter implements ConfigBridgeInterface
{
    /**
     * @var self
     */
    protected static $instance;

    /**
     * @var \OrbitCore\ConfigDomain\Domain\ConfigDomainFacadeInterface
     */
    protected $config;

    /**
     * ConfigAdapter constructor.
     */
    public function __construct()
    {
        $this->config = new ConfigDomainDomainFacade();
        $this->config->setResolver(new Resolver());
    }

    public static function getInstance(): self
    {
        if (static::$instance === null) {
            static::$instance = new ConfigAdapter();
        }
    }



    /**
     * @inheritDoc
     */
    public function get(string $name)
    {
        // TODO: Implement get() method.
    }
}
