<?php
namespace Garbanzo\Theme;

use Garbanzo\Kernel\Configuration;
use Garbanzo\Kernel\Traits\ServiceCreation;

class Theme {

    use ServiceCreation;

    public $layout;

    public function getLayout($layout = 'default') {
        $this->layout = $layout;
        var_dump($this->plugin);
        $themeConfig = $this->loadThemeConfiguration("config/themeConfig.json")->getProperties();
        print_r($themeConfig);
    }

    protected function loadThemeConfiguration($configFilePath) {
        $themeConfiguration = new Configuration();
        $themeConfiguration->setConfigRootDirectory($this->plugin->getPluginRoot());
        $themeConfiguration->loadFile($configFilePath);
        $this->validateRouteFile($themeConfiguration);
        return $themeConfiguration;
    }
}
