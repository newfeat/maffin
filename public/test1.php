<?php

use App\Models\Product;

require __DIR__ . '/../protected/autoload.php';


$product = new Product;
$product->title = 'Торт';
$product->price = '500';
$product->describtion = 'Веселый';
$product->image = 'url';
$product->ingredients = 'Состав';
$product->complements = 'Дополнения';
$product->save();

var_dump($product);