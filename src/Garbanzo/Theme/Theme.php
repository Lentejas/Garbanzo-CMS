<?php
namespace Garbanzo;

use Garbanzo\Kernel\Configuration;

class Theme {
    public $layout = 'default';

    public function getLayout($layout = $this->layout) {
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
