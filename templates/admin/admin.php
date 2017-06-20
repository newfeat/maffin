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
        <section>
            <h1>Панель администратора</h1>
            <h2>Добавить запись</h2>
        </section>
    </div>
    <div class="block1">
        <section>
            <div class="block2">
                <form method="post" action="/Panel/Save">
                    <p><textarea name="describtion" cols="50" rows="3" placeholder="Описание торта"></textarea></p>
                    <p><textarea name="ingredients" cols="50" rows="3" placeholder="Состав продукта"></textarea></p>
                    <p><textarea name="complements" cols="50" rows="3" placeholder="Возможные дополнения"></textarea></p>

                    <p><input type="text" name="cook" placeholder="Введите изготовителя" size="50"/></p>
                    <p><input type="text" name="add" placeholder="Введите добавки" size="50"/></p>
            </div>
            <div class="block2">

                    <p><input type="text" name="image" placeholder="Введите url изображения" size="50"/></p>
                    <p><input type="text" name="title" placeholder="Введите название" size="50"/></p>
                    <p><input type="text" name="price" placeholder="Введите стоимость" size="50" required/></p>
                    <p><input class="button" type="submit" value="Добавить"></p>
                </form>
            </div>
        </section>
    </div>
    <div class="block1">
        <section>
            <h2>Редактировать запись</h2>
            <table>
                <tr>
                    <th style="width: 50px"><p>Фото</p></th>
                    <th style="width: 50px"><p>№</p></th>
                    <th style="width: 100px"><p>Торт</p></th>
                    <th style="width: 50px"><p>Цена</p></th>
                    <th style="width: 100px"><p>Описание</p></th>
                    <th style="width: 100px"><p>Состав</p></th>
                    <th style="width: 100px"><p>Дополнения</p></th>
                    <th style="width: 10px"><p>Изготовитель</p></th>
                    <th style="width: 100px"><p>Добавки</p></th>
                </tr>
                <?php
                foreach ($this->products as $product) { ?>
                <form method="post" action="/Panel/Edit">
                    <tr valign="top">
                        <td>
                            <p><input type="text" name="image" placeholder="url" value="<?php echo $product->image; ?>" style="width: 50px"/></p>
                        </td>
                        <td>
                            <p><input type="text" name="id"  placeholder="id" value="<?php echo $product->id; ?>" style="width: 50px" readonly/></p>
                        </td>
                        <td>
                            <p><input type="text" name="title" placeholder="название" value="<?php echo $product->title; ?>" style="width: 100px"/></p>
                        </td>
                        <td>
                            <p><input type="text" name="price" placeholder="стоимость" value="<?php echo $product->price; ?>" style="width: 30px"> ₽</p>
                        </td>
                        <td>
                            <p><textarea name="describtion" cols="10" rows="2" placeholder="описание" style="width: 100px"><?php echo $product->describtion; ?></textarea></p>
                        </td>
                        <td>
                            <p><textarea name="ingredients" cols="51" rows="2" placeholder="состав" style="width: 100px"><?php echo $product->ingredients; ?></textarea></p>
                        </td>
                        <td>
                            <p><textarea name="complements" cols="51" rows="2" placeholder="дополнения" style="width: 100px"><?php echo $product->complements; ?></textarea></p>
                        </td>
                        <td>
                            <p><textarea name="cook" cols="51" rows="2" placeholder="изготовитель" style="width: 100px"><?php echo $product->cook_id; ?></textarea></p>
                        </td>
                        <td>
                            <p><textarea name="add" cols="51" rows="2" placeholder="добавки" style="width: 100px"><?php echo $product->add_id; ?></textarea></p>
                        </td>
                        <td>
                            <p><input class="button" type="submit" value="&#9998;"></p>
                        </td>
                        <td>
                            <p style="text-align: center"><a class="link" href="/Panel/Delete/?id=<?php echo $product->id; ?>">&#10008;</a></p>
                        </td>
                    </tr>
                </form>
                <?php }; ?>
            </table>
        </section>
    </div>
</article>
<footer class="container">
</footer>
</body>
</html>

