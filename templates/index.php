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
            <?php foreach ($this->products as $product) : ?>
                <section>
                    <h2>
                        <a class="link" href="/Products/One/?id=<?php echo $product->id; ?>">
                            <?php echo $product->title ?>
                        </a>
                    </h2>
                    <article>Описание: <?php echo $product->describtion ?></article>
                    <p style="color: red">Стоимость: <?php echo $product->price ?></p>

                    <p style="color: green"><?php
                        if (!empty($product->cook_id)) {
                            echo 'Изготовитель: ' . $product->cook->cook;

                        } ?></p>
                    <p style="color: orangered"><?php
                        if (!empty($product->add_id)) {
                            echo 'Добавки: ' . $product->add->add;
                        } ?>
                    </p>
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