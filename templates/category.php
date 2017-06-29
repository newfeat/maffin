<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Maffins &ndash; продукт</title>
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
    <article>
        <div class="block1">
            <section>
                    <table>
                        <tr>
                            <td>
                                <h1><?php echo $this->category->title; ?></h1>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="<?php echo $this->category->image; ?>" width="200px" height="200px"
                                     alt="<?php echo $this->category->title; ?>">
                            </td>
                            <td>
                                <p><?php echo $this->category->describtion; ?></p>
                                <hr>
                            </td>
                        </tr>
                    </table>
            </section>
        </div>
    </article>
    <footer>
        <?php
        $view = new \App\View();
        $view->display(__DIR__ . '/footer.php');
        ?>
    </footer>
</div>
</body>
</html>