<?php

namespace App\Models;

use App\Db;
use App\Model;

class Product
    extends Model
    implements OrderableInterface
{
    protected static $table = 'products';

    public $title;
    public $price;
    public $describtion;
    public $image;
    public $ingredients;
    public $complements;

    public function getPrice(){
        return $this->price;
    }

    /*public static function findAll()
    {
        $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT 3';
        $db = new Db();
        return $db->query($sql, [], static::class);
    }
*/
}