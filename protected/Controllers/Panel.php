<?php
namespace App\Controllers;

use App\Contoller;
use App\Models\Product;

class Panel
    extends Contoller
{
    protected function actionDefault()
    {
        $this->view->products = \App\Models\Product::findAll();
        $this->view->display(__DIR__ . '/../../templates/admin/admin.php');
    }


    public function actionEdit()
    {

        $this->view->product = Product::findById((int)$_POST['id']);
        $this->view->product->image = $_POST['image'];
        $this->view->product->title = $_POST['title'];
        $this->view->product->price = $_POST['price'];
        $this->view->product->describtion = $_POST['describtion'];
        $this->view->product->ingredients = $_POST['ingredients'];
        $this->view->product->complements = $_POST['complements'];
        $this->view->product->cook_id = $_POST['cook'];
        $this->view->product->add_id = $_POST['add'];
        $this->view->product->save();
        header('Location: /Panel');
    }

    public function actionSave()
    {
        $this->view->product = new Product;
        $this->view->product->image = $_POST['image'];
        $this->view->product->title = $_POST['title'];
        $this->view->product->price = $_POST['price'];
        $this->view->product->describtion = $_POST['describtion'];
        $this->view->product->ingredients = $_POST['ingredients'];
        $this->view->product->complements = $_POST['complements'];
        $this->view->product->cook_id = $_POST['cook'];
        $this->view->product->add_id= $_POST['add'];
        $this->view->product->save();
        header('Location: /Panel/');
    }

    public function actionDelete()
    {
        $this->view->product = Product::findById((int)$_GET['id']);
        $this->view->product->delete();
        header('Location: /Panel/');
    }


}