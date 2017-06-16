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
     * @var string $id
     */
    public $id;
    /**
     * @var string $title
     */
    public $title;
    /**
     * @var string $price
     */
    public $price;
    /**
     * @var string $describtion
     */
    public $describtion;
    /**
     * @var string $image
     */
    public $image;
    /**
     * @var string $ingredients
     */
    public $ingredients;
    /**
     * @var string $complements
     */
    public $complements;
    /**
     * @var string $cook_id
     */
    public $cook_id;
    /**
     * @var string $add_id
     */
    public $add_id;

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
    }
}