<?php
namespace Garbanzo;

use Garbanzo\Kernel\Definition\Plugin;
use Garbanzo\Kernel\Interfaces\ContainerInterface;
use Garbanzo\DB\Services\MySQL;

class DBPlugin extends Plugin{


    public function getDefinedServices() {
        return array(
            'mysql' => MySQL::class,
        );
    }

    public function loadDependencies() {

    }

    public function create() {

    }

}
