<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Maffins &ndash; детские торты из натуральных ингредиентов</title>
    <link rel="stylesheet" type="text/css" href="/../css/style.css">
</head>
<body>
<div class="container">
    <header>
        <?php
        $view = new \App\View();
        $view->display(__DIR__ . '/header.php');
        ?>
    </header>
    <div class="block1">
            <?php foreach ($this->news as $article) : ?>
                <section>
                    <h2>
                        <a class="link" href="/News/One/?id=<?php echo $article->id; ?>">
                            <?php echo $article->title ?>
                        </a>
                    </h2>
                    <article>Описание: <?php echo $article->describtion ?></article>
                    <p style="color: green"><?php
                        if (!empty($article->author_id)) {
                            echo 'Автор: ' . $article->author->author;
                        } ?></p>
                    <hr>
                </section>
            <?php endforeach; ?>
    </div>
    <footer>
    <?php
    $view = new \App\View();
    $view->display(__DIR__ . '/footer.php');
    ?>
    </footer>
</div>
</body>
</html>