<?php
	session_start();
	if (isset($_SESSION['k_username'])){
?>
<?php
	require_once("bd_conexion.php");
	$matricula=$_GET['matricula'];
	$nombre=$_GET['nombre'];
	$marca=$_GET['marca'];
	$modelo=$_GET['modelo'];
	$color=$_GET['color'];
	$telefono=$_GET['telefono'];
	$Peticion="UPDATE clientes SET nombre=UPPER('$nombre'), 
	marca=UPPER('$marca'), modelo=UPPER('$modelo'), color=UPPER('$color'), 
	telefono='$telefono' where matricula = '$matricula';";
	$idresult=mysqli_query($link, $Peticion);
	if($idresult==0){	
		echo "La sentencia no se ha podido ejecutar.<br>";
		echo mysqli_errno().":".mysqli_error()."<br>";
	}
	else
	{
		echo "Se han modificado los registros <br>";
		header("Location: actualiza.php");
		mysqli_close($link);
	}
?>
<?php
	}
	else
		echo '<p><a href="login.php">Iniciar Sesion</a></p>';
?>