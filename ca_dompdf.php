<?php
use Dompdf\Dompdf;

@require __DIR__  . "/vendor/autoload.php";

$dompdf = new Dompdf();
$dompdf = loadHtml("<h1>Ola Centro Advogados..!!</h1>");

$dompdf->setPaper("A4", "portrait");
$dompdf->render();
var_dump($dompdf->output());
//$dompdf->stream(filename:"arquivo.pdf");
//$dompdf->stream(filename:"arquivo.pdf",["Attachment"=>false]);

