<?php
require __DIR__ . '/../protected/Db.php';
require __DIR__ . '/../protected/Models/Product.php';
//require __DIR__ . '/../protected/Models/User.php';


$data = Product::findAll();

var_dump($data);