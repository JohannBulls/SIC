


<?php


require('../fpdf.php');

	
	class PDF extends FPDF
	{



		function Header()
		{
			$this->Image('../../images/lom.png', 5, 5, 30 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'LOMO & PARRILLA',0,0,'C');
			
			$this->Ln(10);
			$this->SetFont('Arial','B',11);
			$this->Cell(175,10,'Restaurante y Cafeteria',0,0,'C');
			$this->Ln(20);
			$this->SetFont('Arial','B',11);

			$this->Cell(170,10,'Dirección: Cl. 102 #706-71, Bogotá',0,0,'C');$this->Ln(5);
			$this->Cell(140,10,'Teléfono:  2712005',0,0,'C');$this->Ln(5);
			$this->Cell(175,10,'Director: OMAR HERNANDEZ DURAN',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>