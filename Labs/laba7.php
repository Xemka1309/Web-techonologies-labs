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
    if(isset($_GET['submit'])){
        $subject=$_GET['title'];
        $message=$_GET['message'];
    }
    else{
    echo 'bad post:(';
}
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';
    require 'phpmailer/Exception.php';

    $CONFIG = [

        'host' => "localhost",

        'username' => "root",

        'password' => '',

        'database' => 'emaildb'
    ];
    $dblink = mysqli_connect($CONFIG["host"], $CONFIG["username"], $CONFIG["password"], $CONFIG["database"]) or die("Ошибка подключения к базе данных " . mysqli_error($link));

    $query ="SELECT email FROM emails";
    $result = mysqli_query($dblink, $query) or die("Ошибка запроса" . mysqli_error($dblink));
    $rows = mysqli_num_rows($result);
    $resultarray = mysqli_fetch_all($result);
    echo "Emails from DataBase:<br>";
    for ( $i=0; $i < $rows; $i++){
        for ($j=0; $j<count($resultarray[$i]); $j++ ){
            echo ' ';
            echo $resultarray[$i][$j];
        }

    }
    mysqli_close($dblink);
    echo '<br>';



    $mail = new PHPMailer\PHPMailer\PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "%%^^^^^^^^6";
    $mail->Password = "%%%%%%%%%%%";
    $mail->SetFrom("%%%%%%%%");
    for ( $i=0; $i < $rows; $i++){
        for ($j=0; $j<count($resultarray[$i]); $j++ ){
            $mail->AddAddress($resultarray[$i][$j]);
        }

    }
    try
    {
        $mail->Body = $message;
        $mail->Subject = $subject;
        if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Email has been sent";
        }
    } catch (Exception $e) {
        print_r($e->getMessage());

    }
?>
<p>
<a href="labs.php?">Нажмите сюда, чтобы вернутся</a>.
</p>
<?php
include 'footer.php';
?>
