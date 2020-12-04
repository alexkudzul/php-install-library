<?php

require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

// Crea el objeto
$html2pdf = new Html2Pdf();

// Html
// $html = "<h1>Instalando libreria de php para generar PDF</h1>";
// $html .= "<p>Tiene por nombre Html2Pdf</p>";

// Recoger la vista a imprimir
ob_start();
// Cargar vista
require_once 'html-to-pdf.php';
// Se guarda el archivo que se ha obtenido en una variable
$html = ob_get_clean();

// Convierte el html a pdf
$html2pdf->writeHTML($html);

// Se exporta con el siguiente nombre
$html2pdf->output('pdf_generate.pdf');
