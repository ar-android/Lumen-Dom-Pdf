<?php 

namespace App\Http\Controllers;

use \Barryvdh\DomPDF\PDF;

/**
* Pdf Controller
*/
class PdfController extends Controller
{
	
	public function generatePdf()
	{
		$pdf = app()->make('dompdf.wrapper');
		$pdf->loadHTML('<h1>Test</h1>');
		return $pdf->stream();
	}

}