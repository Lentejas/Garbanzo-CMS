<?php
namespace Garbanzo\CMS\Controller;

use Garbanzo\Kernel\Definition\Controller;

class MainController extends Controller{

    public function home() {
        return ['title' => 'home'];
    }

}
