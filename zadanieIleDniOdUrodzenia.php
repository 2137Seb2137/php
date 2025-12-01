<?php
$dataPoczatkowa = strtotime("2007-05-03");
$dataObecna = time();
$roznica = $dataObecna - $dataPoczatkowa;
$dniMinelo = floor($roznica / (60 * 60 * 24));
echo "Żyje już: $dniMinelo dni.";
?>
