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
}