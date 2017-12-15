<?php
session_start();
if (!isset($_SESSION['usuario'])) {
	header('Location:login.php');
}

$errores = '';
$enviado = '';

//Si fue enviado algo por el metodo post
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	//guarda el valor dado y lo limpia
	if (isset($_POST['estado0'])) {
		$estado0 = filter_var(strtolower($_POST['estado0']), FILTER_SANITIZE_STRING);
		//dependiendo del valor de estado va cambiar
		if ($estado0 == 'activar') {
			$estado = '8';

			try {
				$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}
			$statement = $conexion->prepare('UPDATE iluminacion SET controlauto = :estado');
			$statement->execute(array(
				':estado' => $estado )
			);
		}
		if ($estado0=='desactivar' ){

			$estado ='9';
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}
			$statement = $conexion->prepare('UPDATE iluminacion SET controlauto = :estado');
			$statement->execute(array(
				':estado' => $estado )
			);




		}
	}
	//guarda el valor dado y lo limpia
	if (isset($_POST['estado'])) {
		$estado = filter_var(strtolower($_POST['estado']), FILTER_SANITIZE_STRING);
		//dependiendo del valor de estado va cambiar
		if ($estado == 'encender') {
			$estado = '5';
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}
			$statement = $conexion->prepare('UPDATE iluminacion SET estado = :estado');
			$statement->execute(array(
				':estado' => $estado )
			);
		}
		if ($estado=='apagar' ){

			$estado ='6';
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}
			$statement = $conexion->prepare('UPDATE iluminacion SET estado = :estado');
			$statement->execute(array(
				':estado' => $estado )
			);
		}
	}
	if (isset($_POST['estado2'])) {
		$estado2 = filter_var(strtolower($_POST['estado2']), FILTER_SANITIZE_STRING);

			if ($estado2 == 'encender') {
				$estado = '3';
				$estado2 = '3';
				try {
					$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
				} catch (PDOException $e) {
					echo "Error: " . $e->getMessage();
				}
				$statement = $conexion->prepare('UPDATE iluminacion SET estado2 = :estado');
				$statement->execute(array(
					':estado' => $estado2 )
				);
			}
			if ($estado2=='apagar' ){
				$estado = 'a';
				$estado2 = 'a';
				try {
					$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
				} catch (PDOException $e) {
					echo "Error: " . $e->getMessage();
				}
				$statement = $conexion->prepare('UPDATE iluminacion SET estado2 = :estado');
				$statement->execute(array(
					':estado' => $estado2 )
				);
			}


	}




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
	/*
    //conexion a la base de datos domotica
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=domotica', 'root', '');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();;
	}

	//mysql_query("INSERT INTO casa (estado) VALUES ('$nombre')", mysql_connect("localhost","root",""));
	//inserta el valor en la tabla usuariode la base de datos domotica los valores de la variable estado en la columna estado
		$statement = $conexion->prepare('INSERT INTO casa (estado) VALUES (:estado)');
		$statement->execute(array(
			':estado' => $estado
		));

*/

//Traemos el valor de la var estado0
try {
	$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
}

$statement = $conexion->prepare('
	SELECT controlauto FROM iluminacion WHERE 1 '
);
$statement->execute(array(

));

$resultado = $statement->fetch();
foreach ($resultado as $estado0) {
}
//Traemos el valor de la var estado
try {
	$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
}

$statement = $conexion->prepare('
	SELECT estado FROM iluminacion WHERE 1 '
);
$statement->execute(array(

));

$resultado = $statement->fetch();
foreach ($resultado as $estado) {
}

//Traemos el valor de la var estado2
try {
	$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
}

$statement = $conexion->prepare('
	SELECT estado2 FROM iluminacion WHERE 1 '
);
$statement->execute(array(

));

$resultado = $statement->fetch();
foreach ($resultado as $estado2) {
}
require 'views/iluminacion.view.php'
 ?>
