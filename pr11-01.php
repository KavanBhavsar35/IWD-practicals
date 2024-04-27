<?php
require('fpdf186/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    // $this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Salary Slip',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Create a new PDF
$pdf = new PDF();
// Add a new page
$pdf->AddPage();
// Set the margins
$pdf->SetMargins(20,20,20);
// Set the line width
$pdf->SetLineWidth(0.2);
// Set the line color
$pdf->SetDrawColor(0,0,0);

// Fetch the data from the database
$employee_id = 2;
$mysqli = new mysqli("localhost", "root", "", "iwdpracticals");
$result = $mysqli->query("SELECT * FROM employees WHERE id = $employee_id");
$employee = $result->fetch_assoc();

// Print the employee name
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,10,'Name: '.$employee['name'],0,0,'L');
$pdf->Ln();

// Print the employee id
$pdf->Cell(40,10,'ID: '.$employee['id'],0,0,'L');
$pdf->Ln();

// Print the salary amount
$pdf->Cell(40,10,'Salary: '.$employee['salary'],0,0,'L');
$pdf->Ln();

// Print the deductions
// $pdf->Cell(40,10,'Deductions: '.$salary['deductions'],0,0,'L');
// $pdf->Ln();

// Print the net salary
$pdf->SetFont('Arial','BU',12);
$pdf->Cell(40,10,'Net Salary: '.($employee['salary']),0,0,'L');
$pdf->Ln();

// Output the PDF
$pdf->Output();
?>