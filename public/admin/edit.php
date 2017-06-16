<?php

use App\Models\Product;

require __DIR__ . '/../../protected/autoload.php';

$product = Product::findById((int)$_POST['id']);
$product->image = $_POST['image'];
$product->title = $_POST['title'];
$product->price = $_POST['price'];
$product->describtion = $_POST['describtion'];
$product->ingredients = $_POST['ingredients'];
$product->complements = $_POST['complements'];
$product->cook_id = $_POST['ingredients'];
$product->add_id= $_POST['complements'];
$product->save();

header('Location: /admin');