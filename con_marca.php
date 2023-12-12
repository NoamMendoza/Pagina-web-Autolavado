<?php
	session_start();
	if (isset($_SESSION['k_username'])){
?>
<html>
	<head>
		<title>Consulta servicios</title>
		<link rel="shortcut icon" href="logo.png">
	</head>
		<h2 align="center" style="color: white;">Consulta realizada</h2><br>
	<body>
	<style>
    body {
        background-image: url('carro4.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        text-align: center;
        margin: 0; /* Añadido para eliminar el margen predeterminado del body */
    }

    /* Capa semi-transparente para opacar la imagen de fondo */
    body::after {
        content: '';
        display: block;
        position: fixed; /* Cambiado de absolute a fixed */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Ajusta el valor de alfa para cambiar la opacidad */
        z-index: -1; /* Coloca la capa detrás del contenido */
    }
	</style>
	</body>
</html>
<?php
	include("bd_conexion.php");
	$marca=$_GET['marca'];
	$result=mysqli_query($link, "select * from clientes where marca like '$marca%'");
?>
<TABLE align="center" border = 1 cellspacing = 1 cellpadding = 1 style="background-color: white; font-size: 15px; padding: 10px 5px;">
<tr><td><strong>Matrícula</strong></td>
<td align="center"><strong>Nombre</strong></td>
<td align="center"><strong>Marca</strong></td>
<td align="center"><strong>Modelo</strong></td>
<td align="center"><strong>Color</strong></td>
<td align="center"><strong>Teléfono</strong></td></tr>
<?php
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</Td><td>&nbsp;%s&nbsp;
		</TD><td>&nbsp;%s&nbsp;</Td><td>&nbsp;%s&nbsp;</Td><td>&nbsp;%s&nbsp;</Td></tr>"
		, $row["matricula"],$row["nombre"], $row["marca"],$row["modelo"],$row["color"],$row["telefono"]);
	}
	mysqli_free_result($result);
	mysqli_close($link);
?>
</table>
<p align="center">
			<br><br><br><br><br><br><br>
			<button type="button" onclick="location.href='consulta_marca.php'" style="font-size: 15px; padding: 10px 10px;">Volver</button>
		</p>
<?php
	}
	else
		echo '<p><a href="login.php">Iniciar Sesion</a></p>';
?>