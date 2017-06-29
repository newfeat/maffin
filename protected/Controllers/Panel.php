<?php
namespace App\Controllers;

use App\Contoller;
use App\Models\Product;
use App\MultiException;

class Panel
    extends Contoller
{
    protected function access($action)
    {
        return true;
    }


    protected function actionDefault()
    {
        $this->view->products = \App\Models\Product::findAll();
        $this->view->display(__DIR__ . '/../../templates/admin/admin.php');
    }


    public function actionEdit()
    {
        /**
         * @var Product $product
         */
        try{
        $product = Product::findById((int)$_POST['id']);
        $product->fill($_POST);
        } catch (MultiException $e){
            var_dump($e);
        }
        $product->save();
        header('Location: /Panel');
    }

    public function actionSave()
    {
        /**
         * @var Product $product
         */
        try{
        $product = new Product;
        $product->fill($_POST);
        } catch (MultiException $e){
            var_dump($e);
        }
        $product->save();
        header('Location: /Panel/');
    }

    public function actionDelete()
    {
        $product = Product::findById((int)$_GET['id']);
        $product->delete();
        header('Location: /Panel/');
    }
}