<?php
use App\Exceptions\NotFoundException;
use App\Exceptions\ProductNotFoundException;
use App\Exceptions\CategoryNotFoundException;
use App\Exceptions\ArticleNotFoundException;
use App\Exceptions\DbException;

include __DIR__ . '/../protected/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/' , $uri);

if (!empty($parts[1])) {
    $controllerName = $parts[1];
} else {
    $controllerName = 'Products';
}

$controllerClass = '\\App\\Controllers\\' . $controllerName;
$actionName = $parts[2] ?: 'Default';


try{
    $controller = new $controllerClass;
    $controller->action($actionName);

} catch (DbException $e){
    echo $e->getMessage();
} catch (ProductNotFoundException $e){
    $controller = new \App\Controllers\Errors();
    $controller->action('Product404');
} catch (CategoryNotFoundException $e){
    $controller = new \App\Controllers\Errors();
    $controller->action('Category404');
} catch (ArticleNotFoundException $e){
    $controller = new \App\Controllers\Errors();
    $controller->action('Article404');
}


