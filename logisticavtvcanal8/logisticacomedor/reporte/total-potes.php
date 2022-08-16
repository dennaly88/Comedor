




<?php
include('conexion.php');
$gerencia = $_GET['gerencia'];

?>

<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{
    // Cabecera de página

    function Header()
    {

        $this->Image('fpdf/logo.png', 2, 2, 25);

        $this->SetFont('Arial', 'B', 8);
        $this->Cell(30);


        $this->Cell(150, 8, 'VENEZOLANA DE TELEVISION', 1, 1, 'C');
        $this->Ln(20);
        $this->Cell(195, 10, 'CONTROL DE ENVASES', 1, 1, 'C');
        $this->Cell(195, 10, 'TOTAL ', 1, 1, 'C');

        $this->Cell(22, 10, 'Usuario', 1, 0, 'C', 0);
        $this->Cell(48, 10, 'Fecha', 1, 0, 'C', 0);
        $this->Cell(25, 10, 'Cantidad', 1, 0, 'C', 0);
        $this->Cell(22, 10, 'Gerencia', 1, 0, 'C', 0);

        $this->Cell(38, 10, 'Hora', 1, 0, 'C', 0);
        $this->Cell(40, 10, 'Accion', 1, 1, 'C', 0);
    }


    function Footer()
    {

        $this->SetY(-30);

        $this->SetFont('Arial', 'B', 8);
        $this->Ln(5);
        $this->Cell(64, 8, 'Gerente del Area', 1, 0, 'C', 0);
        $this->Cell(64, 8, 'Adjunto', 1, 0, 'C', 0);
        $this->Cell(62, 8, 'Responsable', 1, 1, 'C', 0);
        $this->Cell(64, 10, '', 1, 0, 'C', 0);
        $this->Cell(64, 10, '', 1, 0, 'C', 0);
        $this->Cell(62, 10, '', 1, 0, 'C', 0);
        $this->Ln(15);
        $this->Cell(0, 0, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}
$fecha = date("Y-m-d");
require('conexion.php');
$query = "SELECT * FROM potes ";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);


while ($mostrar = pg_fetch_array($result)) {

    $pdf->Cell(22, 10, $mostrar['usuario'], 1, 0, 'C', 0);
    $pdf->Cell(48, 10, $mostrar['fecha'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $mostrar['cantidad'], 1, 0, 'C', 0);
    $pdf->Cell(22, 10, $mostrar['gerencia'], 1, 0, 'C', 0);

    $total +=  $mostrar['cantidad'];
    $pdf->Cell(38, 10, $mostrar['hora'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $mostrar['accion'], 1, 1, 'C', 0);
}







$total1 = "TOTAL";


while ($mostrar = pg_fetch_assoc($resul)) {

    $total +=  $mostrar['solicitada'];
}

$pdf->Cell(195, 10, $total1, 1, 1, 'C', 0);
$pdf->Cell(195, 10, $total, 1, 1, 'C', 0);










$pdf->Output();

?>



