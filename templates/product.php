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
                                <h1><?php echo $this->product->title; ?></h1>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2><?php echo $this->product->price . ' ₽'; ?></h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="<?php echo $this->product->image; ?>" width="200px" height="200px"
                                     alt="<?php echo $this->product->title; ?>">
                            </td>
                            <td>
                                <p><?php echo $this->product->describtion; ?></p>
                                <hr>
                                <p><?php echo $this->product->ingredients; ?></p>
                                <p><?php echo $this->product->complements; ?></p>
                                <hr>
                                <p><?php echo $this->product->add->add; ?></p>
                                <p><?php echo $this->product->cook->cook; ?></p>
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