<?php
namespace Garbanzo;

use Garbanzo\Kernel\Definition\Plugin;
use Garbanzo\Kernel\Interfaces\ContainerInterface;
use Garbanzo\Theme\Theme;

class ThemePlugin extends Plugin {

    public function getDefinedServices() {
        return array(
            'theme' => Theme::class,
        );
    }

    public function loadDependencies() {

    }

    public function create() {

    }
}
