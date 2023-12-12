<html>
<head>
  <title>Radiante Lavado</title>
  <style type="text/css">
    body {
      font-family: "Didot",
        Times, serif;
      color: white;
      background-image: url('chica.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      text-align: center;
      padding-left: -2em; /* Mover texto */
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
    h1 {
      font-family: Helvetica, Geneva, Arial,
        SunSans-Regular, sans-serif;
    }
    ul.navbar {
      list-style-type: none;
      padding: 0;
      margin: 0;
      position: absolute;
      top: 2em;
      left: 1em;
      width: 9em;
    }
    ul.navbar li {
      background: white;
      margin: 0.5em 0;
      padding: 0.3em;
      border-right: 1em solid black;
    }
    ul.navbar a {
      text-decoration: none;
      color: blue;
    }
    a:visited {
      color: purple;
    }
    address {
      margin-top: 1em;
      padding-top: 0.5em;
    }
    .logout-button {
      margin-top: 20px;
      padding: 10px;
      background-color: white; /* Cambia este color según tus preferencias */
      color: white;
      text-decoration: none;
      display: inline-block;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
	</style>
	<link rel="shortcut icon" href="logo.png">
	</head>
	<body>
	  <!-- Menú de navegación del sitio -->
	  <ul class="navbar">
		<li><a href="alta.php">Altas</a></li>
		<li><a href="borra.php">Bajas</a></li>
		<li><a href="actualiza.php">Modificaciones</a></li>
		<li><a href="consulta_marca.php">Consultas</a></li>
		<li><a href="excel.php">Excel</a></li>
		<li><a href="pdf.php">Pdf</a></li>
		<li><a href="servicios.php">Servicios</a></li>
		<li><a href="consulta_servicio.php">Consulta Servicios</a></li>
	  </ul>
	  <!-- Contenido principal -->
	  <h1>Radiante Lavado</h1>
	  <p>¡Bienvenido a nuestro autolavado!</p>
	  <p>Esta interfaz es para los trabajadores del autolavado.</p>
	  <p>Para empezar solo selecciona una de las opciones.</p>
	  <!-- Firma y fecha de la página, ¡sólo por cortesía! -->
	  <address>Creada el 13 de noviembre de 2023<br>por Noam, Miguel y Edrei.</address> 
	  <!-- Botón para cerrar sesión -->
	  <a href="login.php" class="logout-button">Cerrar Sesión</a> 
	</body>
</html>
