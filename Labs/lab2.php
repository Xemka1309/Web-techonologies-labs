<html>
 <head>
  <title>Laba2</title>
 </head>
 <body>
 <?php
 		$set_string = $_GET['text_array'];
    echo "Input array:<br><br>";
    echo "$set_string";
    echo "<br><br>";
		$startarray = explode(" ", $set_string);
		$relizearray = array();
		foreach ($startarray as $key => $value) {
			if(!(in_array ($value, $relizearray))){
				array_push($relizearray,$value);
			}
		}
		$string1 = implode(',',$relizearray); //переводим массив строку
    echo "fixed array:<br><br>";
		echo "$string1";
    echo '<br><br><a href="labs.php" style="color:blue;">Вернутся</a>';
 ?>
 </body>
</html>
