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
        <section class="buy-section">
          <h2>Заказ портрета</h2>
          <form class="buy-from" action="buy.html" name="buy-form" method="post">
            <label>
              Имя       <input type="text">
            </label>
            <br><br>
            <label>
              Ссылка на соцсеть для связи       <input type="text">
            </label>
            <br><br>
            <span>Формат</span>
            <label class="radio-format">
                  <input type="radio" name="format" value="A5"> A5
            </label>

              <label class="radio-format">
                <input type="radio" name="format" value="A4" checked>A4

              </label class="radio-format">
              <label class="radio-format">
                <input type="radio" name="format" value="A3" checked>A3

              </label class="radio-format">
              <br><br>
              <span>Количество лиц на фотографии</span>
              <label class="radio-format">
                    <input type="radio" name="num" value="1"> 1 Лицо
              </label>

                <label class="radio-format">
                  <input type="radio" name="num" value="2" checked>2 и более лиц

                </label>
              <br><br>
              <label>
                Итоговая цена:
              </label>
              <br><br>

              <span>Комментарии</span>
              <br>
              <label>

                <textarea name="comment" rows="8" cols="80">
                </textarea>
              </label>
              <br><br>
              <label >
                <input class="button" type="submit" name="ok" value="Заказать портрет" height="25px" width="600px">
              </label>
              <br><br><br>
          </form>
        </section>
        <?php
          include 'footer.php';
        ?>
      </body>
</html>
