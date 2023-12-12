<?php
	session_start();
	session_destroy();
	echo 'Sesion Finalizada <p><a href ="index.php">Iniciar Sesion</a></p>';
?>