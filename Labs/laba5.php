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

    include 'header.php';
    $CONFIG = [

        'host' => "localhost",

        'username' => "root",

        'password' => '',

        'database' => 'maindb'
    ];
    $dblink = mysqli_connect($CONFIG["host"], $CONFIG["username"], $CONFIG["password"], $CONFIG["database"]) or die("Ошибка подключения к базе данных " . mysqli_error($link));
    
    $query ="SELECT * FROM orders";
    $result = mysqli_query($dblink, $query) or die("Ошибка запроса" . mysqli_error($dblink)); 
    echo "Customers table:<br>";
    if($result)
    {
        $rows = mysqli_num_rows($result); // количество полученных строк
     
        echo "<table><tr><th>Id</th><th>Date</th><th>Price</th><th>Format</th><th>Customer ID</th></tr>";
        for ($i = 0 ; $i < $rows ; ++$i)
        {
            $row = mysqli_fetch_row($result);
            echo "<tr>";
                for ($j = 0 ; $j < 5 ; ++$j) echo "<td>$row[$j]</td>";
            echo "</tr>";
        }
        echo "</table>";
     
        // очищаем результат
        mysqli_free_result($result);
    }

    $query ="SELECT * FROM customers";
    $result = mysqli_query($dblink, $query) or die("Ошибка запроса" . mysqli_error($dblink)); 
    echo "Orders table:<br>";
    if($result)
    {
        $rows = mysqli_num_rows($result); // количество полученных строк
     
        echo "<table><tr><th>Id</th><th>Name</th><th>Rating</th><th>Adress</th></tr>";
        for ($i = 0 ; $i < $rows ; ++$i)
        {
            $row = mysqli_fetch_row($result);
            echo "<tr>";
                for ($j = 0 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
            echo "</tr>";
        }
        echo "</table>";
     
        // очищаем результат
        mysqli_free_result($result);
    }
    mysqli_close($dblink);
    // индивидуальное задание
    $CONFIGIND = [

        'host' => "localhost",

        'username' => "root",

        'password' => '',

        'database' => 'taskdb'
    ];
    
    
    
    $link = mysqli_connect($CONFIGIND["host"], $CONFIGIND["username"], $CONFIGIND["password"], $CONFIGIND["database"])
    or die("Ошибка подключения к базе данных " . mysqli_error($link));
    // удаляем таблицу
    $query ="DROP TABLE students";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

    // создает таблицу
    $query ="CREATE Table students
    (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(200) NOT NULL,
        groupnum INT,
        WT INT,
        OOP INT,
        OSISP INT,
        RPI INT,
        KSIS INT
    )"; 
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
       // echo "Создание таблицы прошло успешно";
    }
    
    // создание строки запроса
    $querysinsert=[
        1 => "INSERT INTO students VALUES(Null,'Makarevich',751006,9,9,8,7,9)",
        2 => "INSERT INTO students VALUES(Null,'Herasimov',751003,7,6,10,7,9)",
        3 => "INSERT INTO students VALUES(Null,'Valakas',751006,9,5,6,8,9)",
        4 => "INSERT INTO students VALUES(Null,'Gromyako',751006,9,9,10,6,9)"
    ];
    for ($i=1;$i<=4;$i++){
        $result = mysqli_query($link, $querysinsert[$i]) or die("Ошибка " . mysqli_error($link)); 
    }

    // вывод таблицы студентов
    $query="SELECT * FROM students";
    $result = mysqli_query($link, $query) or die("Ошибка запроса" . mysqli_error($link)); 
    echo '<br><br>';
    echo "Students table:<br>";
    //var_dump($result);
    $resultarray = mysqli_fetch_all($result);
    //var_dump($resultarray);
    echo 'Id Name Group m1 m2 m3 m4 m5 average<br>';
    for ($i=0;$i<count($resultarray);$i++){
        for ($j=0;$j<count($resultarray[$i]);$j++){
            echo $resultarray[$i][$j];
            echo ' ';
        }
        echo '<br>';
    }
    echo '<br>';
    $title=[
        0 => "",
        1 => "",
        2 => "",
        3 => "WT",
        4 => "OOP",
        5 => "OSISP",
        6 => "RPI",
        7 => "KSIS"
    ];
    echo 'Students modifed:<br>';
    for ($i=0;$i<count($resultarray);$i++){
        $averagemark=0;
        $minmark=11;
        $minmarkind=-5;
        $maxmark=0;
        $maxmarkind=-5;
        $maxmarks = array();
        $minmarks = array();
        for ($j=0;$j<count($resultarray[$i]);$j++){
            echo $resultarray[$i][$j];
            echo " ";
            if ($j>2){
                $averagemark=$averagemark + $resultarray[$i][$j];
                if ($minmark > $resultarray[$i][$j]){
                    $minmark = $resultarray[$i][$j];
                    $minmarkind = $j;
                }
                if ($maxmark < $resultarray[$i][$j]){
                    $maxmark = $resultarray[$i][$j];
                    $maxmarkind = $j;
                }
            }
                
        }
        $averagemark=$averagemark/5;
        echo $averagemark;
        echo " ";
        echo "minmark subjects: ";
        for  ($n=0;$n<count($resultarray[$i]);$n++){
            if ($resultarray[$i][$n]==$minmark)
            {
                echo $title[$n];
            }
        }
        
        echo ", ";
        echo $minmark;
        echo " maxmark subjects: ";
        for  ($n=0;$n<count($resultarray[$i]);$n++){
            if ($resultarray[$i][$n]==$maxmark)
            {
                echo $title[$n];
                echo ' ';
            }
        }
        echo ", ";
        echo $maxmark;
        echo "<br>";
        
    }
    mysqli_close($link);
    
?>


<p>
<a href="labs.php?">Нажмите сюда, чтобы вернутся</a>.
</p>
<?php
include 'footer.php';
?>