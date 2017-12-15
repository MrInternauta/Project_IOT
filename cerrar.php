<?php session_start();

//----------------------ESCRIBIR EN DOMOTICA.TXT
$estado='t';
			$textfile = "estado_domotica.txt";
			$fileLocation = "$textfile";
			$fh = fopen($fileLocation, 'w') or die("Something went wrong!");
			$stringToWrite = $estado;
			fwrite($fh, $stringToWrite);
			fclose($fh);

session_destroy();
$_SESSION = array();

header('Location: login.php');

?>
