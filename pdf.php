<?php
require("../../controlador/conecxion.php");
 
 $mysql->query("update detalle_factura set estado=('pago') where idmesa =('$_REQUEST[idmesa]')") or
die('error a modificar');

$mysql->query("update mesa set estado=('disponible') where idmesa =('$_REQUEST[idmesa]')") or
die('error a modificar');

	$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha=$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;


	include 'tuto6.php';
	require 'conecxion.php';


	$registro=$mysqli->query("SELECT max(idfactura) from factura") or die('està mal numero de factura');
	 while ($re=$registro->fetch_array())
	 {
		$factura= $re['max(idfactura)']; 

	$query = "SELECT factura.idfactura AS factura ,detalle_factura.cliente AS cliente,detalle_factura.compra AS compra,detalle_factura.idmesa AS mesa,detalle_factura.cantidad AS cantidad,detalle_factura.precio AS precio,detalle_factura.TOTAL AS total,factura.fecha AS fecha FROM `detalle_factura` JOIN factura on detalle_factura.idfactura= factura.idfactura WHERE detalle_factura.idmesa = '$_REQUEST[idmesa]'AND detalle_factura.estado = 'pago' ORDER by detalle_factura.id_detalle DESC LIMIT 1";
	$resultado = $mysqli->query($query);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();


			
		while($row = $resultado->fetch_assoc())
	{	
		$pdf->Ln(20);
		$pdf->SetFont('Arial','B',16);
			$pdf->Cell(175,10,'Factura N-: '.$row['factura'],0,0,'C');


		$pdf->Ln(20);
		$pdf->SetFont('Arial','B',16);
			$pdf->Cell(175,10,'Cliente:   '.$row['cliente'],0,0,'C');
			$pdf->SetFont('Arial','B',11);
			$pdf->Ln(10);
			$pdf->Cell(175,10,'Expedicion factura:  '.$row['fecha'],0,0,'C');
			$pdf->Ln(20);

	
	$pdf->SetFillColor(332,232,232);
	$pdf->SetFont('Arial','B',10);

	$pdf->Cell(50,6,'FECHA DE COMPRA',1,0,'C',1);
	$pdf->Cell(10,6,'MESA',1,0,'C',1);
	$pdf->Cell(40,6,'COMPRA',1,0,'C',1);
	$pdf->Cell(20,6,'CANTIDAD',1,0,'C',1);
	$pdf->Cell(20,6,'PRECIO ',1,0,'C',1);
	$pdf->Cell(20,6,'TOTAL',1,1,'C',1);

	$pdf->SetFont('Arial','',10);
	
	

		$pdf->Cell(50,6,utf8_decode($row['fecha']),1,0,'C');
		$pdf->Cell(10,6,$row['mesa'],1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['compra']),1,0,'C');
		$pdf->Cell(20,6,$row['cantidad'],1,0,'C');
		$pdf->Cell(20,6,$row['precio'],1,0,'C');
		$pdf->Cell(20,6,$row['total'],1,1,'C');

	}
	}
	$pdf->Output();


echo"<script type=\"text/javascript\">alert('se a realizado pago de la compra'); window.location='../../vista/factura_prueba;</script>"; 

?>