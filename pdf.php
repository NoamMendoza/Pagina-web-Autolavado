<?php
	session_start();
	if (isset($_SESSION['k_username'])){
?>
<?php
	require('fpdf.php');
	include("bd_conexion.php");
	$result=mysqli_query($link,"select * from clientes");
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial', 'B', 24);+$pdf->Cell(0,10, 'CLIENTES DE AUTOLAVADO', 0, 1);
	$pdf->Ln();
	$pdf->SetFont('Arial', '', 9);
	
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$pdf->Cell(33,12,"Matricula: ".$row['matricula'], 'C');
		$pdf->Cell(30,12,"Nombre: ".$row['nombre'], 'C');
		$pdf->Cell(33,12,"Marca: ".$row['marca'], 'C');
		$pdf->Cell(35,12,"Modelo: ".$row['modelo'], 'C');
		$pdf->Cell(30,12,"Color: ".$row['color'], 'C');
		$pdf->Cell(40,12,"Telefono: ".$row['telefono'], 'C');
		$pdf->Ln();
	}
	$pdf->Output('', 'fpdf-complete.pdf');
?>
<?php
	}
	else
	{
		echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
		echo '<p align="center"><a href="login.php">Iniciar Sesion</a></p>';
	}
?>