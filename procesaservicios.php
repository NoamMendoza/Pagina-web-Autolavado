<?php
	session_start();
	if (isset($_SESSION['k_username'])){
?>
<html>
	<head>
		<title>Agregar servicios</title>
		<link rel="shortcut icon" href="logo.png">
		<style>
    body {
        position: relative;
        text-align: center;
    }
    /* Capa semi-transparente para opacar la imagen de fondo */
    body::before {
        content: '';
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('carro5.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        filter: brightness(50%); /* Para cambiar el valor de la opacidad */
        z-index: -1; /* Colocar la capa detrás del contenido */
    }
    table {
        margin: auto;
        border-collapse: collapse;
        width: 10%;
        background-color: white;
    }
    table, th, td {
        border: 1px solid black;
    }
    form {
        text-align: left;
    }
</style>
	</head>
	<body>
		<?php
			require_once("bd_conexion.php");
			$matricula=$_GET['matricula'];
			$result=mysqli_query($link, "SELECT * from clientes where matricula = '$matricula';");
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			$r_matricula=$row["matricula"];
		?>
		<h2 style="color: white;">Formulario para agendar un servicio</h2>
		<p style="color: white;">Ingrese los datos del servicio.</p>
		<form name="form1" action="guardaservicio.php" method="get">
			<table>
				<tr>
					<td align="right"><strong>ID:</strong></td>
					<td><input type="text" name="matricula" value="<?php echo $r_matricula?>" maxlength="9" readonly="readonly"></td>
				</tr>
				<!-- Reemplaza el campo de servicio con un combo box -->
				<tr>
					<td align="right"><strong>Servicio:</strong></td>
					<td>
						<select name="servicio">
							<option value="lavado alfombras">Lavado de Alfombras</option>
							<option value="servicio pulido">Servicio de Pulido</option>
							<option value="servicio encerado ">Servicio de Encerado</option>
							<option value="lavado interior">Lavado de Interior</option>
							<option value="lavado exterior">Lavado Exterior</option>
							<option value="limpieza motor">Limpieza de Motor</option>
							<option value="lavado chasis">Lavado de Chasis</option>
							<option value="brillo en llantas y molduras">Brillo en Llantas y Molduras</option>
							<!-- Agrega más opciones según sea necesario -->
						</select>
					</td>
				</tr>
				<tr>
					<td align="right"><strong>Costo:</strong></td>
					<td><input type="text" name="costo" size="50" maxlength="20" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
				</tr>
				<tr>
					<td align="right"><strong>Pago:</strong></td>
					<td><input type="text" name="pago" size="50" maxlength="20" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
				</tr>
				<tr>
					<td align="right"><strong>Fecha:</strong></td>
					<td><input type="date" name="fecha" size="20"></td>
				</tr>
				<tr>
					<td align="right"><strong>Hora:</strong></td>
					<td><input type="text" name="hora" size="50" maxlength="5" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 58'></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="submit" value="Agendar Servicio"></td>
				</tr>
			</table>
		</form>
		<p align="center">
		<br><br><br><br><br><br><br>
			<button type="button" onclick="location.href='servicios.php'" style="font-size: 15px; padding: 10px 10px;">Volver</button>
		</p>
	</body>
</html>
<?php
	}
	else
	{
		echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
		echo '<p align="center"><a href="login.php">Iniciar Sesión</a></p>';
	}
?>
