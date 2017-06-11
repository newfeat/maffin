<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maffins &ndash; детские торты из натуральных ингредиентов</title>
    <link rel="stylesheet" type="text/css" href="/../css/style.css">
</head>
<body>
<header class="container">
    <?php include __DIR__ . '/header.php'; ?>
</header>
<article class="container">
    <div class="block1">
        <div class="container1">
            <?php
            foreach ($data as $value) { ?>
                <div>
                    <ul style="font-size: 13px; line-height: 1.7;">
                        <li>
                            <a class="link" href="/product.php?id=<?php echo $value->id; ?>"><?php echo $value->title; ?> <strong><?php echo $value->price . ' ₽'; ?></strong><br><?php echo $value->desc; ?></a>
                        </li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>
</article>
<footer class="container">
</footer>
</body>
</html>