<?php

require_once 'dompdf/autoload.inc.php';
require_once ''

// reference the Dompdf namespace
//use Dompdf\Dompdf;

// instantiate and use the dompdf class
$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream($clients."-".$nom."-".$numclie.".pdf");

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

//Setting Options
//Set options are not required

?>