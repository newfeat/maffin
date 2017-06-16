<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
</head>
<body>
<?php foreach ($this->products as $product) :  ?>
    <section>
        <h1><?php echo $product->title ?></h1>
        <article>Описание: <?php echo $product->describtion ?></article>
        <p style="color: red">Стоимость: <?php echo $product->price ?></p>

        <p style="color: green"><?php
        if (!empty($product->cook_id)){
        echo 'Изготовитель: ' . $product->cook->cook;

        } ?></p>
        <p style="color: orangered"><?php
            if (!empty($product->add_id)){
                echo 'Добавки: ' . $product->add->add;
            } ?></p>
    </section>
    <hr>
<?php endforeach; ?>

<?php
$view = new \App\View();
$view->display(__DIR__ . '/footer.php');
?>


</body>
</html>