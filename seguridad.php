<?php
session_start();
if (!isset($_SESSION['usuario'])) {
	header('Location:login.php');
}

//Si fue enviado algo por el metodo post
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}

//alarmas
	if (isset($_POST['estado0'])) {
		$resultado[2] = filter_var(strtolower($_POST['estado0']), FILTER_SANITIZE_STRING);
		$statement = $conexion->prepare('UPDATE alarmas SET alarma = :estado');
		if ($resultado[2] == 'activar') {
			$estado = '4'; //encendido
		}
		if ($resultado[2]=='desactivar' ){
			$estado ='c'; //apagado
		}
	}

 //puerta 1
	//guarda el valor dado y lo limpia
	if (isset($_POST['estado'])) {
		$statement = $conexion->prepare('UPDATE alarmas SET estado = :estado');
		$resultado[0] = filter_var(strtolower($_POST['estado']), FILTER_SANITIZE_STRING);
		//dependiendo del valor de estado va cambiar
		if ($resultado[0] == 'encender') {
			$estado = 'd'; //abierto
		}
		if ($resultado[0]=='apagar' ){

			$estado ='e'; //apagado
		}
	}


//puerta2
	if (isset($_POST['estado2'])) {
		$resultado[1] = filter_var(strtolower($_POST['estado2']), FILTER_SANITIZE_STRING);
		$statement = $conexion->prepare('UPDATE alarmas SET estado2 = :estado');

			if ($resultado[1] == 'encender') {
				$estado = 'f'; //abierta
			}
			if ($resultado[1]=='apagar' ){
				$estado = 'g'; //apagado
			}
	}
	$statement->execute(array(
		':estado' => $estado )
	);
	// Escribimos una primera línea en fichero.txt
	// fichero.txt tienen que estar en la misma carpeta que el fichero php
	//escribo en un texto lo que hemos seleccionado en la imagen
			$textfile = "estado_domotica.txt";
			$fileLocation = "$textfile";
			$fh = fopen($fileLocation, 'w') or die("Something went wrong!");
			$stringToWrite = $estado;
			fwrite($fh, $stringToWrite);
			fclose($fh);

	}

try {
	$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
}

//Traemos el valor toda la tabla
$statement = $conexion->prepare('
SELECT * FROM alarmas WHERE 1'
);
$statement->execute(array(
));
$resultado = $statement->fetch();





require 'views/seguridad.view.php'
 ?>
