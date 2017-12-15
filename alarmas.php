<?php
session_start();
if (!isset($_SESSION['usuario'])) {
	header('Location:login.php');
}
/*
Para funcionar necesita
Base de datos = login_practica
tablas=
iluminacion = estado(int), estado2(vachat), controlauto(int)
temperatura = estado(int), estado2(int),rangomax(int), rangomin(int), controlauto(int), reset (vatchat)
usuarios = id (int), usuarios (vachat), pass (vachart)
///------------------
Datos y acciones
temperatura
Arduino -    BD -      ACCION
2						 0 = Desactivar Control automatico de temperatura & apagar todo lo manual reset ventilacion, (se guarda en BD login_practica > controlauto)
1            1 = Encender Ventilacion (se guarda en BD login_practica > estado)
2            2 = Apagar Ventilacion (se guarda en BD login_practica > estado)
7            7 = Activar Control automatico de temperatura (se guarda en BD login_practica > controlauto)

iluminacion

seguridad

------NOTA: CREAR FUNCIONES: CONEXION A LA BD, TRAE DATOS,CAMBIAR DATOS, ESCRIBIR EN TXT
*/



$errores = '';
$enviado = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
		//----------------------------------------------------- Rango de temperatura
		$rango_min = filter_var(strtolower($_POST['range1']), FILTER_SANITIZE_STRING);
		$rango_max = filter_var(strtolower($_POST['range2']), FILTER_SANITIZE_STRING);
		//si la temperatura minima es mayor a la maxima
	if ($rango_min>$rango_max) {
	$rango_min=20;
	$rango_max=30;
			$errores .= 'La temperatura minima no puede ser mayor a la temperatura maxima <br />';
			//escribe en archivos
			$fp = fopen("estado_temp_min.txt", "w");
			fputs($fp, "$rango_min");
			fclose($fp);
			$fp2 = fopen("estado_temp_max.txt", "w");
			fputs($fp2, "$rango_max");
			fclose($fp2);
			//END escribe en archivos
			//ESCRIBE EN LA DB
			$enviado = 'true';
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}
			//rango min
			$statement = $conexion->prepare('UPDATE temperatura SET rangomin = :rangomin');
			$statement->execute(array(
				':rangomin' => $rango_min )
			);
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}
			//rango max
			$statement = $conexion->prepare('UPDATE temperatura SET ramgomax = :rangomax');
			$statement->execute(array(
				':rangomax' => $rango_max )
			);
			//END ESCRIBE EN LA DB
		}
		// si los datos son correctos
		else {
		// Escribe en txt
		$fp = fopen("estado_temp_min.txt", "w");
		fputs($fp, "$rango_min");
		fclose($fp);
		$fp2 = fopen("estado_temp_max.txt", "w");
		fputs($fp2, "$rango_max");
		fclose($fp2);
		// END Escribe en txt
		$enviado = 'true';
		//escribe en la DB
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
		//rango min
		$statement = $conexion->prepare('UPDATE temperatura SET rangomin = :rangomin');
		$statement->execute(array(
			':rangomin' => $rango_min )
		);
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
		//rango max
		$statement = $conexion->prepare('UPDATE temperatura SET ramgomax = :rangomax');
		$statement->execute(array(
			':rangomax' => $rango_max )
		);
		}
		//END escribe en la DB

	}
		//End----------------------------------------------------- Rango de temperatura
		//----------------------------------------------------- trae datos de la DB
		//Traemos el valor de la var estado0
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
		foreach ($resultado as $estado0) {
		}

// traemos el valor de la var rango min
try {
	$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
}

$statement = $conexion->prepare('
	SELECT rangomin FROM temperatura WHERE 1 '
);
$statement->execute(array(

));

$resultado = $statement->fetch();
foreach ($resultado as $estado) {
	# code...
}
$rango_min = $estado;

// traemos el valor de la var rango max
try {
	$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
}

$statement = $conexion->prepare('
	SELECT ramgomax FROM temperatura WHERE 1 '
);
$statement->execute(array(

));

$resultado = $statement->fetch();
foreach ($resultado as $estado) {
	# code...
}
$rango_max = $estado;

require 'views/alarmas.view.php'
 ?>
