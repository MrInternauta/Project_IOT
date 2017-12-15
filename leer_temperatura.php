<?php
session_start();
if (!isset($_SESSION['usuario'])) {
	header('Location: index.php');
}
				  //leo los datos de temperatura enviados por el arduino
						$filename="estado_temperatura.txt";
						//$mensaje='temperatura actual';
						$fp=fopen($filename,"r") or die("no se puede mostrar");
						$char=fgets($fp);
						echo "<h1><p ><font color='green'>$char °C</p></h1>";
					  fclose($fp);
?>
