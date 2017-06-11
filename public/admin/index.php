<?php
require __DIR__ . '/../../protected/autoload.php';
$data = \App\Models\Product::findAll();

include __DIR__ . '/admin.php';