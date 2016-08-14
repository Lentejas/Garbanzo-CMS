<?php
namespace GarbanzoCMS;

use Garbanzo\Kernel\Interfaces\PluginInterface;
use Garbanzo\Kernel\Interfaces\ContainerInterface;

class CMSPlugin implements PluginInterface{

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
        $this->configuration = new JsonConfig();
        $this->configuration->setContainer($this->container);
        $this->configuration->setConfigRootDirectory('/src/Garbanzo/Core');
        $this->configuration->loadFile($this->mainConfigFileName);
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
