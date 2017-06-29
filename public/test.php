<?php
use App\Models\Product;

include __DIR__ . '/../protected/autoload.php';



try{
    $product = new Product();
    $product->title = '!';

} catch (\App\MultiException $e){
    var_dump($e);
}


