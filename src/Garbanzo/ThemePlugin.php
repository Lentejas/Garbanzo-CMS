<?php
namespace Garbanzo;

use Garbanzo\Kernel\Definition\Plugin;
use Garbanzo\Kernel\Interfaces\ContainerInterface;
use Garbanzo\Theme\Theme;

class ThemePlugin extends Plugin {

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
            'theme' => Theme::class,
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
