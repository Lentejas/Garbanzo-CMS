<?php
namespace Garbanzo;

use Garbanzo\Kernel\Definition\Plugin;
use Garbanzo\Kernel\Interfaces\ContainerInterface;

class CMSPlugin extends Plugin{

    public function getDefinedServices() {
        return array(

        );
    }

    public function loadDependencies() {

    }

    public function create() {
        //echo $this->getPluginRoot();
    }
}
