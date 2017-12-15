<?php
/*
Para funcionar necesita
Base de datos = login_practica
tablas=
iluminacion = estado(int), estado2(vachat), controlauto(int)
temperatura = estado(int), estado2(int),rangomax(int), rangomin(int), controlauto(int), reset (vatchat)
usuarios = id (int), usuarios (vachat), pass (vachart)
///------------------
Datos y accione


s
temperatura
Arduino -    BD -      ACCION
1            1 = Encender Ventilacion (se guarda en BD login_practica > estado)
2            2 = Apagar Ventilacion (se guarda en BD login_practica > estado)
7            7 = Activar Control automatico de temperatura (se guarda en BD login_practica > controlauto)


iluminacion

Arduino -    BD -      ACCION
8            8 = Activar Control automatico de temperatura (se guarda en BD login_practica > controlauto)
9					   9 = Desactivar Control automatico de  iluminacion


5            5 = Encender iluminacion (se guarda en BD login_practica > estado)
6            6 = Apagar iluminacion (se guarda en BD login_practica > estado)

3            3 = Encender iluminacion (se guarda en BD login_practica > estado)
a            a = Apagar iluminacion (se guarda en BD login_practica > estado)

seguridad

Arduino -    BD -      ACCION


d            d = abrir puerta
e            e = cerrar puerta

f            f = abrir puerta2
g            g = cerrar puerta2



------NOTA: CREAR FUNCIONES: CONEXION A LA BD, TRAE DATOS,CAMBIAR DATOS, ESCRIBIR EN TXT
*/

session_start();
if (!isset($_SESSION['usuario'])) {
	header('Location:login.php');
}

$errores = '';
$enviado = '';

//------------------------------------------------SI ENVIAN  DATOS POR POST
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
//----------------------CONTROLAUTO
	if (isset($_POST['estado0'])) {
		$controlauto = filter_var(strtolower($_POST['estado0']), FILTER_SANITIZE_STRING);
		//Si activan el controlauto
		if ($controlauto == 'activar') {
			$estado = '7';
			//Envia datos a la DB
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}
			$statement = $conexion->prepare('UPDATE temperatura SET controlauto = :estado');
			$statement->execute(array(
				':estado' => $estado )
			);
		}
		//si desactivan controlauto
		if ($controlauto=='desactivar' ){
			$estado ='0';
			//Envia datos a la DB
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}
			$statement = $conexion->prepare('UPDATE temperatura SET controlauto = :estado');
			$statement->execute(array(
				':estado' => $estado )
			);
			//Desactivar ventilacion
			$estado ='2';
			//Enviar datos a la BD
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}
			$statement = $conexion->prepare('UPDATE temperatura SET estado = :estado');
			$statement->execute(array(
				':estado' => $estado )
			);
		}
	}
//----------------------END CONTROLAUTO
//----------------------CONTROLMANUAL
	if (isset($_POST['estado'])) {
		$estado = filter_var(strtolower($_POST['estado']), FILTER_SANITIZE_STRING);
		//si encienden Ventilacion
		if ($estado == 'encender') {
			$estado = '1';
			//enviar datos a la DB
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}
			$statement = $conexion->prepare('UPDATE temperatura SET estado = :estado');
			$statement->execute(array(
				':estado' => $estado )
			);
		}
		//Si apagan Ventilacion
		if ($estado=='apagar' ){
			$estado ='2';
			//Enviar datos a la BD
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}
			$statement = $conexion->prepare('UPDATE temperatura SET estado = :estado');
			$statement->execute(array(
				':estado' => $estado )
			);
		}
	}
//----------------------END CONTROLMANUAL
//----------------------ESCRIBIR EN DOMOTICA.TXT
			$textfile = "estado_domotica.txt";
			$fileLocation = "$textfile";
			$fh = fopen($fileLocation, 'w') or die("Something went wrong!");
			$stringToWrite = $estado;
			fwrite($fh, $stringToWrite);
			fclose($fh);
	}
//-------------------------------------------END SI ENVIAN  DATOS POR POST
//--------------------------------------TRAE VALORES DE LA BASE DE DATOS
//estado de controlauto
try {
	$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
}
$statement = $conexion->prepare('
	SELECT controlauto FROM temperatura WHERE 1 '
);
$statement->execute(array(

));

$resultado = $statement->fetch();
foreach ($resultado as $controlauto) {
}

//Trae valor de botones CONTROLMANUAL
try {
	$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
}

$statement = $conexion->prepare('
	SELECT estado FROM temperatura WHERE 1 '
);
$statement->execute(array(

));

$resultado = $statement->fetch();
foreach ($resultado as $estado) {
}
//--------------------------------------END TRAE VALORES DE LA BASE DE DATOS

require 'views/temperatura.view.php'
 ?>
