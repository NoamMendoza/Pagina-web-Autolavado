<?php
	session_start();
	if (isset($_SESSION['k_username'])){
?>
<html>
	<head>
		<title>Guarda servicios</title>
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
			.container {
				margin: auto;
				width: 20%;
				background-color: white;
				padding: 20px;
				border-radius: 10px;
				margin-top: 50px;
			}
		</style>

	</head>
	<body>
		<div class="container">
			<?php
				include("bd_conexion.php");
				$no=0;
				$servicio=$_GET['servicio'];
				$costo=$_GET['costo'];
				$pago=$_GET['pago'];
				$matricula=$_GET['matricula'];
				$fecha=$_GET['fecha'];
				$hora=$_GET['hora'];
				$cambio= intval($pago)-intval($costo);
				$query="insert into servicios values(".
				"'$matricula',".
				"'$no',".
				"UPPER('$servicio'),".
				"'$costo',".
				"'$pago',".
				"'$fecha',".
				"'$hora')";
				
				if(intval($costo)>intval($pago)){
					echo "<p>Pago insuficiente</p>";
					echo '<p><a href="servicios.php">Servicios</a></p>';
				} else {
					echo "<p>Pago procesado</p>";
					echo "Total de cambio: $".$cambio;
					mysqli_query($link, $query);
					echo '<p><a href="servicios.php">Servicios</a></p>';
				}
			?>
		</div>
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
