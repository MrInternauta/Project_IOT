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
Datos y accione


s
temperatura
Arduino -    BD -      ACCION
0						 0 = Desactivar Control automatico de temperatura & apagar todo lo manual reset ventilacion, (se guarda en BD login_practica > controlauto)
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
4            4 = Activar alarma
c					   c = Desactivar alarma

d            d = abrir puerta
e            e = cerrar puerta

f            f = abrir puerta2
g            g = cerrar puerta2



------NOTA: CREAR FUNCIONES: CONEXION A LA BD, TRAE DATOS,CAMBIAR DATOS, ESCRIBIR EN TXT
*/


/*
$errores = '';
$enviado = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$compañia = filter_var(strtolower($_POST['compañia']), FILTER_SANITIZE_STRING);
	$ns = filter_var(strtolower($_POST['ns']), FILTER_SANITIZE_STRING);
	$correo = filter_var(strtolower($_POST['correo']), FILTER_SANITIZE_STRING);
	$nombres = filter_var(strtolower($_POST['nombres']), FILTER_SANITIZE_STRING);
	$apellidos = filter_var(strtolower($_POST['apellidos']), FILTER_SANITIZE_STRING);
	$direccion = filter_var(strtolower($_POST['direccion']), FILTER_SANITIZE_STRING);
	$ciudad = filter_var(strtolower($_POST['ciudad']), FILTER_SANITIZE_STRING);
	$pais = filter_var(strtolower($_POST['pais']), FILTER_SANITIZE_STRING);
	$cp = filter_var(strtolower($_POST['cp']), FILTER_SANITIZE_STRING);
	$sm = filter_var(strtolower($_POST['sm']), FILTER_SANITIZE_STRING);


		try {
			$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
		} catch (PDOException $e) {
			echo "Error:" . $e->getMessage();;
		}

		$statement = $conexion->prepare(
			"INSERT INTO `usuarios_inf`(`id`, `compañia`, `ns`, `correo`, `nombres`, `apellidos`, `direccion`, `ciudad`, `pais`, `cp`, `sm`) VALUES (,[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])
			");
		$statement->execute(array(
			':usuario' => $usuario,
			':password' => $password
		));

		$resultado = $statement->fetch();



}


/*
value="<?php if(isset($rango_max)) echo $rango_max ?>"
*/

require 'views/user.view.php'
 ?>
