<?php

use App\Models\User;

require __DIR__ . '/../protected/autoload.php';


$user = new User();
$user->email = 'test@test.ru';
$user->password = '1234';
$user->save();

var_dump($user);