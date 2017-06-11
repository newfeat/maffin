<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maffins &ndash; административная панель</title>
    <link rel="stylesheet" type="text/css" href="/../css/style.css">
</head>
<body>
<header class="container">
</header>
<article class="container">
    <div class="block1">
        <div class="container1">
            <h1>Панель администратора</h1>
            <h2>Добавить запись</h2>
        </div>
    </div>
    <div class="block1">
        <div class="container1">
            <div class="block2">
                <form method="post" action="create.php">
                    <p><textarea name="describtion" cols="50" rows="3" placeholder="Описание торта"></textarea></p>
                    <p><textarea name="ingredients" cols="50" rows="3" placeholder="Состав продукта"></textarea></p>
                    <p><textarea name="complements" cols="50" rows="3" placeholder="Возможные дополнения"></textarea></p>
            </div>
            <div class="block2">

                    <p><input type="text" name="image" placeholder="Введите url изображения" size="50"/></p>
                    <p><input type="text" name="title" placeholder="Введите название" size="50"/></p>
                    <p><input type="text" name="price" placeholder="Введите стоимость" size="50" required/></p>
                    <p><input class="button" type="submit" value="Добавить"></p>
                </form>
            </div>
        </div>
    </div>
    <div class="block1">
        <div class="container1">
            <h2>Редактировать запись</h2>

            <table>
                <tr>
                    <th style="width: 50px"><p>Фото</p></th>
                    <th style="width: 50px"><p>№</p></th>
                    <th style="width: 200px"><p>Торт</p></th>
                    <th style="width: 50px"><p>Цена</p></th>
                    <th style="width: 200px"><p>Описание</p></th>
                    <th style="width: 100px"><p>Состав</p></th>
                    <th style="width: 100px"><p>Дополнения</p></th>
                    <th style="width: 50px"><p></p></th>
                    <th style="width: 50px"><p></p></th>
                </tr>
                <?php
                foreach ($data as $product) { ?>
                <form method="post" action="edit.php">
                    <tr valign="top">
                        <td>
                            <p><input type="text" name="image" placeholder="url" value="<?php echo $product->image; ?>" style="width: 50px"/></p>
                        </td>
                        <td>
                            <p><input type="text" name="id"  placeholder="id" value="<?php echo $product->id; ?>" style="width: 50px" readonly/></p>
                        </td>
                        <td>
                            <p><input type="text" name="title" placeholder="название" value="<?php echo $product->title; ?>" style="width: 200px"/></p>
                        </td>
                        <td>
                            <p><input type="text" name="price" placeholder="стоимость" value="<?php echo $product->price; ?>" style="width: 30px"> ₽</p>
                        </td>
                        <td>
                            <p><textarea name="describtion" cols="10" rows="2" placeholder="описание" style="width: 200px"><?php echo $product->describtion; ?></textarea></p>
                        </td>
                        <td>
                            <p><textarea name="ingredients" cols="51" rows="2" placeholder="состав" style="width: 100px"><?php echo $product->ingredients; ?></textarea></p>
                        </td>
                        <td>
                            <p><textarea name="complements" cols="51" rows="2" placeholder="дополнения" style="width: 100px"><?php echo $product->complements; ?></textarea></p>
                        </td>
                        <td>
                            <p><input class="button" type="submit" value="&#9998;"></p>
                        </td>
                        <td>
                            <p style="text-align: center"><a class="link" href="delete.php?id=<?php echo $product->id; ?>">&#10008;</a></p>
                        </td>
                    </tr>
                </form>
                <?php }; ?>
            </table>

        </div>
    </div>
</article>
<footer class="container">
</footer>
</body>
</html>

