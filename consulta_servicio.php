<?php
	session_start();
	if (isset($_SESSION['k_username'])){
?>
<html>
	<head>
		<title>Consulta servicios</title>
		<link rel="shortcut icon" href="logo.png">
	</head>
	<body>
	<style>
    body {
        background-image: url('carro6.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        text-align: center;
        position: relative;
    }
    /* Capa semi-transparente para opacar la imagen de fondo */
    body::after {
        content: '';
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Para cambiar el valor de la opacidad */
        z-index: -1; /* Colocar la capa detrás del contenido */
    }
</style>
	<h1 align="center" style="color: white;">Consulta de servicios</h2><br>
	</body>
</html>
<?php
	include("bd_conexion.php");
	$result=mysqli_query($link, "select * from servicios");
?>
<TABLE align="center" border = 1 cellspacing = 1 cellpadding = 1 style="background-color: white;">
<tr><td align="center"><strong>Matrícula</strong></td>
<td align="center"><strong>No</strong></td>
<td align="center"><strong>Servicio</strong></td>
<td align="center"><strong>Costo</strong></td>
<td align="center"><strong>Pago</strong></td>
<td align="center"><strong>Fecha</strong></td>
<td align="center"><strong>Hora</strong></td></tr>
<?php
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</Td><td>&nbsp;%s&nbsp;
		</TD><td>&nbsp;%s&nbsp;</Td><td>&nbsp;%s&nbsp;</Td><td>&nbsp;%s&nbsp;</Td><td>&nbsp;%s&nbsp;</Td></tr>"
		, $row["matricula"],$row["no"], $row["servicio"],$row["costo"],$row["pago"],$row["fecha"],$row["hora"]);
	}
	mysqli_free_result($result);
	mysqli_close($link);
?>
</table>
	<p align="center">
		<br>
		<button type="button" onclick="location.href='index.php'" style="font-size: 15px; padding: 10px 10px;">Volver</button>
	</p>
<?php
	}
	else
		echo '<p><a href="login.php">Iniciar Sesion</a></p>';