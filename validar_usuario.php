<html>
	<head>
		<title>Usuario válido</title>
		<link rel="shortcut icon" href="logo.png">
	</head>
	<body>
	<style>
    body {
        background-image: url('chica9.jpg');
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
	.box {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        margin: 50px auto;
        max-width: 300px;
        text-align: center;
    }
	</style>
	</body>
</html>
<?php
	session_start();
	include("bd_conexion.php");
	if (trim($_POST["usuario"])!="" && trim($_POST["password"])!=""){
		$usuario=strtolower(htmlentities($_POST["usuario"], ENT_QUOTES));
		$password=$_POST["password"];
		$result=mysqli_query($link,'select pass, usuario from empleados where usuario=\''.$usuario.'\'');
		if($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
			if($row["pass"]==$password){
				$_SESSION["k_username"]=$row["usuario"];
				echo '<div class="box">';
				echo '<p style="color: black;">Has ingresado correctamente. '.$_SESSION['k_username'].'</p>';
				echo '<p><a href="index.php">Menú</a></p>';
				echo '</div>';
			}
			else{
				echo '<div class="box">';
				echo 'Password incorrecto, vuelve a intentar.';
				echo '<br>';
				echo '<a href="login.php"> Login</a>';
				echo '</div>';
			}
		else{
			echo '<div class="box">';
			echo 'Usuario NO existe, vuelve a intentar.';
			echo '<br>';
			echo '<a href="login.php"> Login</a>';
			echo '</div>';
		}
	mysqli_free_result($result);
	}
	else{
		echo '<div class="box">';
		echo 'Debe especificar un usuario y contraseña, vuelve a intentar.';
		echo '<br>';
		echo '<a href="login.php"> Login</a>';
		echo '</div>';
	}
?>
