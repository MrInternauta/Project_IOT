<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: alarmas.php');
} else {
	header('Location: login.php');
}

 ?>
