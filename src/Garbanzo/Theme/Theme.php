<?php
namespace Garbanzo\Theme;

use Garbanzo\Kernel\Configuration;
use Garbanzo\Kernel\Traits\ServiceCreation;

class Theme {

    use ServiceCreation;

    public $layout;

    public function getLayout($layout = 'default') {
        $this->layout = $layout;
        $themeConfig = $this->loadThemeConfiguration("themeConfig.json")->getProperties();
        return file_get_contents($this->plugin->getPluginRoot().$themeConfig->{$themeConfig->current}->path.$this->layout.'.html.php');
    }

    protected function loadThemeConfiguration($configFilePath) {
        $themeConfiguration = new Configuration($this->plugin->getPluginRoot());
        $themeConfiguration->loadFile($configFilePath);
        return $themeConfiguration;
    }
}
