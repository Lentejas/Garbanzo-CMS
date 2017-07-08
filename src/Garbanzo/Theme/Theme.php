<?php
namespace Garbanzo\Theme;

use Garbanzo\Kernel\Configuration;
use Garbanzo\Kernel\ConfigurationManager;
use Garbanzo\Kernel\Traits\ServiceCreation;

class Theme {

    use ServiceCreation;

    private $layout;
    private $configuration;

    /**
     * Theme constructor.
     * @param $configuration
     */
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }


    public function getLayout($layout = 'default') {
        $this->layout = $layout;
        $themeConfig = $this->configuration->getProperties();
        return new Layout(ConfigurationManager::$ROOT.$this->plugin->getPluginRoot().$themeConfig->{$themeConfig->current}->path.$this->layout.'.html.php');
    }

}
