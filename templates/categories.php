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
            <?php foreach ($this->categories as $category) : ?>
                <section>
                    <h2>
                        <a class="link" href="/Categories/One/?id=<?php echo $category->id; ?>">
                            <?php echo $category->title ?>
                        </a>
                    </h2>
                    <article>Описание: <?php echo $category->describtion ?></article>
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