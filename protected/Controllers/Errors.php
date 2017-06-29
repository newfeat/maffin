<?php

namespace App\Controllers;


use App\Contoller;

class Errors
    extends Contoller
{
    protected function actionDbError()
    {
        $this->view->display(__DIR__ . '/../../templates/dberror.php');
    }

    protected function action404()
    {
        $this->view->display(__DIR__ . '/../../templates/404.php');
    }

    protected function actionProduct404()
    {
        $this->view->display(__DIR__ . '/../../templates/product404.php');
    }

    protected function actionCategory404()
    {
        $this->view->display(__DIR__ . '/../../templates/category404.php');
    }

    protected function actionArticle404()
    {
        $this->view->display(__DIR__ . '/../../templates/article404.php');
    }



}