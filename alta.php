<?php
	session_start();
	if (isset($_SESSION['k_username'])){
?>
<html>
	<head>
		<title>Formulario de altas</title>
		<link rel="shortcut icon" href="logo.png">
	</head>
	<body>
	<style>
    body {
        background-image: url('carro.jpg');
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
		<h1 align="center" style="color: white;">Alta de cliente</h1>
		<p style="color: white;">Ingrese los datos del cliente.</p>
		<form action = "procesa_alta.php" method="get">
			<table align="center" border ="1" style="background-color: white;">
				<tr align = "right">
					<td>Matrícula:</td>
					<td><input type="text" name="matricula" size="50" maxlength="9"></td>
				</tr>
				<tr align = "right">
					<td>Nombre:</td>
					<td><input type="text" name="nombre" size="50" maxlength="20"></td>
				</tr>
				<tr align="right">
					<td>Marca:</td>
					<td><input type="text" name="marca" size="50" maxlength="30"></td>
				</tr>
				<tr align="right">
					<td>Modelo:</td>
					<td><input type="text" name="modelo" size="50" maxlength="50"></td>
				</tr>
				<tr align="right">
					<td>Color:</td>
					<td><input type="text" name="color" size="50" maxlength="50"></td>
				</tr>
				<tr align="right">
					<td>Teléfono:</td>
					<td><input type="text" name="telefono" size="50" maxlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
				</tr>
				<tr>
					<td colspan=2 align=center>
						<input type="submit" name = "agregar" value="Agregar" />
					</td>
				</tr>
			</table>
		</form> <br />
	<?php
		include("bd_conexion.php");
		$result=mysqli_query($link,"select * from clientes");
	?>
	<div style="text-aling: center;">
	<TABLE BORDER=1 CELLSPACING =1 CELLPADDING = 1 align=center style="background-color: white;">
	<TR><td align="center"><strong>Matrícula</strong></td>
	<TD align="center"><strong>Nombre</strong></TD>
	<TD align="center"><strong>Marca</strong></TD>
	<TD align="center"><strong>Modelo</strong></TD>
	<TD align="center"><strong>Color</strong></TD>
	<TD align="center"><strong>Teléfono</strong></TD></TR>
	<?php
		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){ 
			printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td></tr>",
			$row["matricula"], $row["nombre"],$row["marca"],$row["modelo"],$row["color"], $row["telefono"]);
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