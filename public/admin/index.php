<?php
require __DIR__ . '/../../protected/autoload.php';
$data = \App\Models\Product::findAll();
$view = new \App\View();
$view->products = $data;
$view->display(__DIR__ . '/admin.php');