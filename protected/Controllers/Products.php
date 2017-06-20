<?php
namespace App\Controllers;

use App\Contoller;

class Products
    extends Contoller
{
    protected function actionDefault()
    {
        $this->view->products = \App\Models\Product::findAll();
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }

    protected function actionOne()
    {
        $this->view->product = \App\Models\Product::findById($_GET['id']);
        $this->view->display(__DIR__ . '/../../templates/product.php');
    }
}