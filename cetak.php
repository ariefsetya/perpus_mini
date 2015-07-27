<?php
  ob_start();
  include_once "cetaknya.php";
  require_once "pdf/dompdf_config.inc.php";
  $dompdf = new DOMPDF();
  $dompdf->load_html(ob_get_clean());
  $dompdf->set_paper('A4', 'Potrait');
  $dompdf->render();

  $dompdf->stream($_GET['cetak'].".pdf", array("Attachment" => '0'));
?>