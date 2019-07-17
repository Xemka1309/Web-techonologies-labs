<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="Main_styles.css" rel="stylesheet">
        <link href="icons.css" rel="stylesheet">
        <meta name="keywords" content="Портреты на заказ, Минск, Жлобин" >
        <title>Заказ Портретов</title>
    </head>
    <body>
      <?php
        include 'header.php';
      ?>

        <!-- header end-->

        <form  action="lab2.php" method="get">
          <label>
            Введите массив элементов разделяя значения пробелом<br>
            <input type="text"  id="array" name="text_array" maxlength="100" height="800px" width="50px"><br>
          </label>
          <label for="button"> Подтвердить <br></label>
          <input type="submit" id="button_task" value="OK" name="OK_button">
        </form>
        <?php
          include 'footer.php';
        ?>
    </body>
</html>
