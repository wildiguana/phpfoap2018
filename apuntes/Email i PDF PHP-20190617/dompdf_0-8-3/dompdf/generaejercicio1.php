<?php

require_once 'dompdf/autoload.inc.php';
require ("ejercicio1_lista_clientes.php");

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$html = ob_get_clean();
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("archiv.pdf");

//Setting Options
//Set options are not required

?>