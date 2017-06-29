<?php

namespace App\Controllers;


use App\Contoller;
use App\Logger;
use App\Exceptions\CategoryNotFoundException;

class Categories
    extends Contoller
{
    protected function actionDefault()
    {
        $this->view->categories = \App\Models\Category::findAll();

        $this->view->display(__DIR__ . '/../../templates/categories.php');
    }

    protected function actionOne()
    {
        $category = \App\Models\Category::findById($_GET['id']);

        if (empty($category)){
            $error =  new CategoryNotFoundException('Категория не найдена');
            $l = Logger::instance();
            $l->log($error);
            throw $error;
        }
        $this->view->category = $category;
        $this->view->display(__DIR__ . '/../../templates/category.php');
    }

}