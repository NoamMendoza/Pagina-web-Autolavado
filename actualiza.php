<?php
	session_start();
	if (isset($_SESSION['k_username'])){
?>
<html>
	<head>
		<title>Modificaciones</title>
		<link rel="shortcut icon" href="logo.png">
	</head>
	<body>
	<style>
    body {
        background-image: url('carro3.jpg');
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
		<h1 align="center" style="color: white;">Modificar datos</h1>
		<p style="color: white;">Seleccione el registro que desea modificar.</p>
		<?php
			include("bd_conexion.php");
			$result = mysqli_query($link, "select * from clientes")
		?>
		<TABLE align="center" BORDER=1 CELLSPACING =1 CELLPADDING=1 style="background-color: white;">
		<TR><td align="center">&nbsp;<b>Matrícula</b>&nbsp;</td>
		<td align="center">&nbsp;<b>Nombre</b>&nbsp;</td>
		<td align="center">&nbsp;<b>Marca</b>&nbsp;</td>
		<td align="center">&nbsp;<b>Modelo</b>&nbsp;</td>
		<td align="center">&nbsp;<b>Color</b>&nbsp;</td>
		<td align="center">&nbsp;<b>Teléfono</b>&nbsp;</td>
		<td align="center">&nbsp;<b>Modificar</b>&nbsp;</td></tr>
		<?php
			while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
				printf("<tr><td>&nbsp;%s</td><td>%s&nbsp;</td><td>%s&nbsp;</td><td>%s&nbsp;</td><td>%s&nbsp;</td><td>%s&nbsp;</td>
				<td><a href = \"procesaactualiza.php?matricula=%s\">MODIFICAR</a></td></tr>",
				$row["matricula"], $row["nombre"],$row["marca"],$row["modelo"],$row["color"],$row["telefono"], $row["matricula"]);
			}
			mysqli_free_result($result);
			mysqli_close($link);
		?>
		</TABLE>
		<p align="center">
		<br><br><br><br><br><br><br>
			<button type="button" onclick="location.href='index.php'" style="font-size: 15px; padding: 10px 10px;">Volver</button>
		</p>
	</body>
</html>
<?php
	}
	else
	{
		echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
		echo '<p align="center"><a href="login.php">Iniciar Sesion</a></p>';
	}
?>