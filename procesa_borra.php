<?php
	session_start();
	if (isset($_SESSION['k_username'])){
?>
<?php
	include("bd_conexion.php");
	$matricula=$_GET['matricula'];
	echo $matricula;
	mysqli_query($link,"DELETE from clientes where matricula='$matricula'");
	header("Location:borra.php");
	echo mysqli_errno($link);
?>
<?php
	}
	else
		echo '<p><a href="login.php">Iniciar Sesion</a></p>';
?>