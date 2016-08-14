<?php
namespace Garbanzo;

use Garbanzo\Kernel\Interfaces\PluginInterface;
use Garbanzo\Kernel\Interfaces\ContainerInterface;
use Garbanzo\DB\Services\MySQL;

class DBPlugin implements PluginInterface{

    protected $container;
    protected $configuration;
    protected $mainConfigFileName;
    protected $namespace;

    public function __construct($name, $mainConfigFileName) {
        $this->namespace = $name;
        $this->mainConfigFileName;
    }

    public function setContainer(ContainerInterface $container) {
        $this->container = $container;
    }

    public function getDefinedServices() {
        return array(
            'mysql' => MySQL::class,
        );
    }

    public function loadDependencies() {

    }

    public function create() {

    }

    public function getServicesNamespace() {
        return $this->namespace;
    }

    public function getConfiguration() {
        return $this->configuration;
    }
}
