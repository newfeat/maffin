<?php
namespace App\Controllers;

use App\Contoller;
use App\Logger;
use App\Exceptions\ArticleNotFoundException;

class News
    extends Contoller
{
    protected function actionDefault()
    {
        $this->view->news = \App\Models\Article::findAll();

        $this->view->display(__DIR__ . '/../../templates/news.php');
    }

    protected function actionOne()
    {
        $article = \App\Models\Article::findById($_GET['id']);

        if (empty($article)){
            $error = new ArticleNotFoundException('Статья не найдена');
            $l = Logger::instance();
            $l->log($error);
            throw $error;
        }
        $this->view->article = $article;
        $this->view->display(__DIR__ . '/../../templates/article.php');
    }
}