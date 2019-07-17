<?php
$id="none";
$id = $_GET["id"];
if(empty($id)) {
   $id = 1;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="Main_styles.css" rel="stylesheet">
        <link href="icons.css" rel="stylesheet">
        <meta name="keywords" content="Портреты на заказ, Минск, Жлобин" >
        <title>Заказ Портретов</title>
        <style media="screen">
           .active {
              background: blue;
              color: green;
           }
        </style>
    </head>
    <body>
        <header>
            <div class="header-img">
            <img src="img/header.jpeg" width="100%" height="600px">
            <h1>Портреты на заказ Минск / Жлобин</h1>

            </div>
            <nav class="menu">
                <ul class="menu-list">
                    <li><a href="laba2_common.php?id=main" class="<?php if($id == "main") echo 'active'?>">Главная(Прайс-лист)</a></li>
                    <li><a href="laba2_common.php?id=buy" class="<?php if($id == "buy") echo 'active'?>">Заказать</a></li>
                    <li><a href="laba2_common.php?id=qa" class="<?php if($id == "qa") echo 'active'?>">Ответы на популярные вопросы</a></li>
                    <li><a href="laba2_common.php?id=contacts" class="<?php if($id == "contacts") echo 'active'?>">Контакты</a></li>
                    <li><a href="laba2_common.php?id=queue" class="<?php if($id == "queue") echo 'active'?>">Проверить очередь</a></li>
                    <li><a href="laba2_common.php?id=portfolio" class="<?php if($id == "portfolio") echo 'active'?>">Портфолио</a></li>
                    <li><a href="labs.php" style="color:blue;" >Вернутся</a></li>
                </ul>
             </nav>

        </header>
