<?php
//Generador de PDF
require('../../FPDF/fpdf.php');
include '../../conexio/conexio.php';
//include '../../includes/visualizarRestrictivo.php';
extract($_REQUEST);
$usu=1;

//Sql
$sql_premi = "SELECT * FROM tbl_ecochange INNER JOIN tbl_patrocinador ON tbl_patrocinador.patr_id = tbl_ecochange.patr_id WHERE eco_id='$premi'";
$premis = mysqli_query($conexion, $sql_premi);

$sql_usu = "SELECT * FROM tbl_usuari WHERE usu_id='$usu'";
$usuaris = mysqli_query($conexion, $sql_usu);
	
while ($premi = mysqli_fetch_object($premis)) {
	while ($usuari = mysqli_fetch_object($usuaris)) {
	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(50, 40, "");
	$pdf->Cell(100,40,"Soctree (logo)");
	$pdf->Ln(50);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(54, 10, utf8_decode('Enhorabona '.$usuari->usu_nom.' '.$usuari->usu_cognom.' has obtingut '.$premi->eco_nom_premi));
	$pdf->Ln(7);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(10, 10, "");
	$pdf->Cell(54, 10, utf8_decode($premi->eco_descripcio));
	$pdf->Ln(16);
	$pdf->SetFont('Arial','',13);
	$pdf->Cell(54, 10, 'Posat en contacte amb els patrocinadors');
	$pdf->SetFont('Arial','',12);
	$pdf->Ln(7);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(54, 10, utf8_decode($premi->patr_nom));
	$pdf->SetFont('Arial','',12);
	$pdf->Ln(7);
	$pdf->Cell(54, 10, utf8_decode('Telèfon:'));
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(100, 10, $premi->patr_telf_contacte, 0);
	$pdf->Output();
	}
}
?>	