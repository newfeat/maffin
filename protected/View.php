<?php

namespace App;

/**
 * Class View
 * @package App
 */
class View
{
    use MagicTrait;

    /*
     public function assign($key, $val)
     {
    return $this->data[$key] = $val;
    }
     */


    public function display($template)
    {
        include $template;
    }

}