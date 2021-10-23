<?php 
require_once (dirname (__FILE__) ."/pdf/html2pdf.class.php");



ob_start();

    require_once("invoice.php");

    $html = ob_get_clean();
    $html2pdf = new Html2Pdf('P', 'a4', 'fr', true, 'UTF-8', 0);  

$html2pdf->pdf->SetDisplayMode('fullpage');
$html2pdf->setTestTdInOnePage(true);
$html2pdf->writeHTML($html);
$html2pdf->output('pdf.pdf', 'I');
?>