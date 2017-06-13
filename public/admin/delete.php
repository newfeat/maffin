<?php

use App\Models\Product;

require __DIR__ . '/../../protected/autoload.php';

$product = Product::findById((int)$_GET['id']);
$product->delete();

header('Location: /admin');