<?php
require __DIR__ . '/../protected/autoload.php';
$data = \App\Models\Product::findAll();
$view = new \App\View();



//$view->assign('products', $data);
$view->products = $data;



$view->display(__DIR__ . '/../templates/index.php');


//include __DIR__ . '/../templates/index.php';


/*
require __DIR__ . '/../protected/autoload.php';
$data = \App\Models\Product::findAll();

include __DIR__ . '/products.php';
 */

