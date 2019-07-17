
<?php

    $CONFIG = [

        'host' => "localhost",

        'username' => "root",

        'password' => '',

        'database' => 'counterbd'
    ];
    $dblink = mysqli_connect($CONFIG["host"], $CONFIG["username"], $CONFIG["password"], $CONFIG["database"])
    or die("Ошибка подключения к базе данных " . mysqli_error($link));

    $query ="UPDATE imagecounter
    SET counter = counter+1
    WHERE ID = 1";
    $result = mysqli_query($dblink, $query) or die("Ошибка запроса" . mysqli_error($dblink)); 
    
    

    echo '<img src="img/header.jpeg" width="100%" height="600px">';

?>