<?php
	include("bd_conexion.php");
	$matricula=$_GET['matricula'];
	$nombre=$_GET['nombre'];
	$marca=$_GET['marca'];
	$modelo=$_GET['modelo'];
	$color=$_GET['color'];
	$telefono=$_GET['telefono'];
	$query="insert into clientes values(".
	"UPPER('$matricula'),".
	"UPPER('$nombre'),".
	"UPPER('$marca'),".
	"UPPER('$modelo'),".
	"UPPER('$color'),".
	"'$telefono')";
	
	mysqli_query($link, $query);
	header("Location: alta.php");
?>