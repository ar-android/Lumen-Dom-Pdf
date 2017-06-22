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
		$pdf->loadFile(base_path().'/public/myfile.html');
		return $pdf->stream();
	}

}