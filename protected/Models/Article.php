<?php

namespace App\Models;

use App\Db;
use App\Model;
use App\MultiException;

class Article
    extends Model
{
    protected static $table = 'news';

    /**
     * @param $key
     * @return mixed
     */
    public function __get($key)
    {
        if ($key === 'author' && isset($this->author)) {
            return Author::findById($this->author_id);
        }

        return $this->data[$key];
    }

    /**
     * @param $key
     * @return bool
     */
    public function __isset($key)
    {
        if ($key === 'author') {
            return isset($this->author_id);
        }

        return isset($this->data[$key]);
    }

    protected function validate_title($val)
    {
        $err = new MultiException();
        if(strlen($val)<5){
            $err->add(new \Exception('Слишком коротокое наименование товара'));
        }
        if(false !== strpos($val, '!')){
            $err->add(new \Exception('Недопустимый символ в наименовании товара'));
        }
        if(!$err->empty()){
            throw $err;
        }
    }
}