<?php
	session_start();
	if (isset($_SESSION['k_username'])){
?>
<html>
	<head>
		<title>Formulario para modificar</title>
		<link rel="shortcut icon" href="logo.png">
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
    table {
        margin: auto;
        border-collapse: collapse;
        width: 30%;
        background-color: white;
    }
    table, th, td {
        border: 1px solid black;
    }
    form {
        text-align: left;
    }
	</style>
		<h2 align="center" style="color: white;">Formulario de modificación</h2>	
	</head>
	<body>
		<?php
			require_once("bd_conexion.php");
			$matricula = $_GET['matricula'];
			$result = mysqli_query($link, "SELECT * from clientes where matricula = '$matricula';");
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			$r_matricula = $row["matricula"];
			$r_nombre = $row["nombre"];
			$r_marca = $row["marca"];
			$r_modelo = $row["modelo"];
			$r_color = $row["color"];
			$r_telefono = $row["telefono"];
		?>
		<p style="color: white;">Modifique los campos que desee oportunos y presione modificar.</p>
		<form name="form1" action="guardaactualiza.php" method="get">
			<table>
				<tr>
					<td align="right"><strong>ID:</strong></td>
					<td><input type="text" name="matricula" value="<?php echo $r_matricula ?>" maxlength="9" readonly="readonly"></td>
				</tr>
				<tr>
					<td align="right"><strong>Nombre:</strong></td>
					<td><input type="text" name="nombre" value="<?php echo $r_nombre ?>" size="50" maxlength="20"></td>
				</tr>
				<tr>
					<td align="right"><strong>Marca:</strong></td>
					<td><input type="text" name="marca" value="<?php echo $r_marca ?>" size="50" maxlength="20"></td>
				</tr>
				<tr>
					<td align="right"><strong>Modelo:</strong></td>
					<td><input type="text" name="modelo" value="<?php echo $r_modelo ?>" size="50" maxlength="50"></td>
				</tr>
				<tr>
					<td align="right"><strong>Color:</strong></td>
					<td><input type="text" name="color" value="<?php echo $r_color ?>" size="50" maxlength="50"></td>
				</tr>
				<tr>
					<td align="right"><strong>Teléfono:</strong></td>
					<td><input type="text" name="telefono" value="<?php echo $r_telefono ?>" size="20" maxlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="submit" value="Modificar"></td>
				</tr>
			</table>
		</form>
		<p align="center">
		<br><br><br><br><br><br><br>
			<button type="button" onclick="location.href='actualiza.php'" style="font-size: 15px; padding: 10px 10px;">Volver</button>
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
