<?php
	session_start();
	if (isset($_SESSION['k_username'])){
?>
<?php
	header('Content-type: application/vnd.ms-excel');
	header("Content-Disposition: attachment; filename=clientes.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
	include("bd_conexion.php");
	$q = "SELECT * FROM clientes";
	$rs = mysqli_query($link, $q);
	$tot = mysqli_num_rows($rs);
?>
	<table>
		<thead>
			<tr>
				<td>Matricula</td>
				<td>Nombres</td>
				<td>Marca</td>
				<td>Modelo</td>
				<td>Color</td>
				<td>Telefono</td>
			</tr>
		</thead>
		<tbody>
			<?php while($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)):?>
			<tr>
				<td><?php echo $row ['matricula']?></td>
				<td><?php echo $row ['nombre']?></td>
				<td><?php echo $row ['marca']?></td>
				<td><?php echo $row ['modelo']?></td>
				<td><?php echo $row ['color']?></td>
				<td><?php echo $row ['telefono']?></td>
			</tr>
				<?php endwhile;?>
		</tbody>
	</table>
<?php
	}
	else
	{
		echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
		echo '<p align="center"><a href="login.php">Iniciar Sesion</a></p>';
	}
?>