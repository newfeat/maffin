<?php

require __DIR__ . '/../Model.php';

class Product
    extends Model
{
    protected static $table = 'products';

    public $title;
    public $price;
    public $desc;
    public $image;
    public $ingredients;
    public $complements;

    public static function findAll()
    {
        $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT 3';
        $db = new Db();
        return $db->query($sql, [], static::class);
    }

}