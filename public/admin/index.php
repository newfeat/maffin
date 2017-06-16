<?php
require __DIR__ . '/../../protected/autoload.php';

$view = new \App\View();
$view->products = \App\Models\Product::findAll();
$view->display(__DIR__ . '/admin.php');