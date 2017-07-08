<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 08/07/17
 * Time: 14:04
 */

namespace Garbanzo\Theme;


use Garbanzo\Core\HTTP\Response;

class Layout
{

    private $layout;
    private $data;

    /**
     * Layout constructor.
     * @param $layout
     */
    public function __construct($layout)
    {
        $this->layout = $layout;
        $this->data = [];
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    public function addData($data) {

    }

    public function createResponse($status = 200) {
        try {
            ob_start();
            extract($this->data);
            require $this->layout;
            $content = ob_get_clean();

            return new Response($content, $status);
        } catch (\Exception $e) {
            return new Response('Not found', 404);
        }
    }



}