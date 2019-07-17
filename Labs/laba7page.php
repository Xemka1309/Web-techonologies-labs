<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="Main_styles.css" rel="stylesheet">
        <link href="icons.css" rel="stylesheet">
        <link href="buy.css" rel="stylesheet">
        <meta name="keywords" content="Портреты на заказ, Минск, Жлобин" >
        <title>Заказ Портретов</title>
    </head>
    <body>
      <?php
        include 'header.php';
      ?>
        <h2>Отправление рассылки</h2>
        <form action="laba7.php" method="get">
        <input type="text" name="title" placeholder="Заголовок сообщения" ><br><br><br>
        <textarea rows="20"  cols="35"  name="message"  ></textarea>
        <input type="submit" name="submit" value="Отправить">
        </form>
        <?php
          include 'footer.php';
        ?>
      </body>
</html>