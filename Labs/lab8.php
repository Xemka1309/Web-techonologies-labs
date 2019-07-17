<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="Main_styles.css" rel="stylesheet">
        <link href="icons.css" rel="stylesheet">
        <meta name="keywords" content="Портреты на заказ, Минск, Жлобин" >
        <title>Заказ Портретов</title>
    </head>
<?php

    $CONFIG = [

        'host' => "localhost",

        'username' => "root",

        'password' => '',

        'database' => 'counterbd'
    ];
    $dblink = mysqli_connect($CONFIG["host"], $CONFIG["username"], $CONFIG["password"], $CONFIG["database"])
    or die("Ошибка подключения к базе данных " . mysqli_error($link));

    $query ="SELECT counter 
    FROM imagecounter
    WHERE ID = 1";
    $count=-1;
    $result = mysqli_query($dblink, $query) or die("Ошибка запроса" . mysqli_error($dblink)); 
    if ($result){
        $resultarray = mysqli_fetch_all($result);
        $count=$resultarray[0][0];
    }
    

    echo 'Картинка в header была показана ';
    echo $count;
    echo ' раз';
    

?>
<p>
<a href="labs.php?">Нажмите сюда, чтобы вернутся</a>.
</p>
<?php
include 'footer.php';
?>