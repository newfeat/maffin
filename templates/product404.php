<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Товар не найден 404</title>
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
        <section>
            <h2>Ошибка</h2>
            <p style="color: orangered">Товар не найден</p>
            <hr>
        </section>
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