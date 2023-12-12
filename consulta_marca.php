<?php
	session_start();
	if (isset($_SESSION['k_username'])){
?>
<html>
	<head>
		<title>Formulario de consultas</title>
		<link rel="shortcut icon" href="logo.png">
	</head>
	<body>
	<style>
    body {
        background-image: url('carro4.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        text-align: center;
        margin: 0; 
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
		<h1 align="center" style="color: white;">Consulta por marca</h1>
		<p style="color: white;">Ingrese la marca que desea consultar.</p>
		<form action = "con_marca.php" method = "get">
			<table align="center" border="1" style="background-color: white;">
				<tr align ="right">
					<td><strong>Marca:</strong></td>
					<td><input type="text" name="marca" size="50" maxlength="30"></td>
				</tr>
				<td colspan=2 align = center>
				<input type="submit" name="agregar" value="Buscar" /></td></tr>
			</table>
		<p align="center">
			<br><br><br><br><br><br><br>
			<button type="button" onclick="location.href='index.php'" style="font-size: 15px; padding: 10px 10px;">Volver</button>
		</p>
		</form>
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