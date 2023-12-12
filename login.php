<html>
	<head>
		<title>Acceso</title>
		<link rel="shortcut icon" href="logo.png">
	</head>
		<h1 align="center" style="color: white;">Iniciar Sesión</h1>
			<br><br><br><br><br><br><br><br>
	<body align="center">
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
	</style>
		<form action="validar_usuario.php" method="post" style="color: white;">
			Usuario:
			<input type="text" name="usuario" size="20" maxlength="20" />
			<br />
			Password:
			<input type="password" name="password" size="20" maxlength="50" />
			<br /><br />
			<input type="submit" value="Ingresar" />
		</form>
	</body>
</html>