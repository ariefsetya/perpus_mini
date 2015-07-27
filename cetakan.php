<?php
  ob_start();
  include_once "laporan.php";
  require_once "pdf/dompdf_config.inc.php";
  $dompdf = new DOMPDF();
  $dompdf->load_html(ob_get_clean());
  $dompdf->set_paper('A4', 'Potrait');
  $dompdf->render();

  $dompdf->stream($_GET['dey'].".pdf", array("Attachment" => '0'));
?>