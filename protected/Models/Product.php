<?php

namespace App\Models;

use App\Db;
use App\Model;

/**
 * Class Product
 * @package App\Models
 */
class Product
    extends Model
{
    protected static $table = 'products';

    /**
     * @param $key
     * @return mixed
     */
    public function __get($key)
    {
        if ($key === 'cook' && isset($this->cook)) {
            return Cook::findById($this->cook_id);
        }

        if ($key === 'add' && isset($this->add)) {
            return Add::findById($this->add_id);
        }

        return $this->data[$key];
    }

    /**
     * @param $key
     * @return bool
     */
    public function __isset($key)
    {
        if ($key === 'cook') {
            return isset($this->cook_id);
        }

        if ($key === 'add') {
            return isset($this->add_id);
        }

        return isset($this->data[$key]);
    }
}