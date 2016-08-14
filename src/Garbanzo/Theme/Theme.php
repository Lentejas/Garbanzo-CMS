<?php
namespace Garbanzo\Theme;

use Garbanzo\Kernel\Configuration;
use Garbanzo\Kernel\Traits\ServiceCreation;

class Theme {

    use ServiceCreation;

    public $layout;

    public function getLayout($layout = 'default') {
        $this->layout = $layout;
        $themeConfig = $this->loadThemeConfiguration("config/themeConfig.json")->getProperties();
        print_r($themeConfig);
    }

    protected function loadThemeConfiguration($configFilePath) {
        $themeConfiguration = new Configuration();
        $themeConfiguration->setConfigRootDirectory('/');
        $themeConfiguration->loadFile($configFilePath);
        $this->validateRouteFile($themeConfiguration);
        return $themeConfiguration;
    }
}
