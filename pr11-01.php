<?php
require ('fpdf186/fpdf.php');

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(80);
        $this->Cell(30, 10, 'Salary Slip', 1, 0, 'C');
        $this->Ln(20);
    }
    function Footer()
    {        $this->SetY(-15);        $this->SetFont('Arial', 'I', 8);        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetMargins(20, 20, 20);
$pdf->SetLineWidth(0.2);
$pdf->SetDrawColor(0, 0, 0);

$employee_id = 2;
$mysqli = new mysqli("localhost", "root", "", "iwdpracticals");
$result = $mysqli->query("SELECT * FROM employees WHERE id = $employee_id");
$employee = $result->fetch_assoc();

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(40, 10, 'Name: ' . $employee['name'], 0, 0, 'L');
$pdf->Ln();

$pdf->Cell(40, 10, 'ID: ' . $employee['id'], 0, 0, 'L');
$pdf->Ln();

$pdf->Cell(40, 10, 'Salary: ' . $employee['salary'], 0, 0, 'L');
$pdf->Ln();

$pdf->SetFont('Arial', 'BU', 12);
$pdf->Cell(40, 10, 'Net Salary: ' . ($employee['salary']), 0, 0, 'L');
$pdf->Ln();

$pdf->Output();
?>