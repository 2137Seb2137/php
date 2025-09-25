<?php
$docelowaData = mktime(0, 0, 0, 5, 4, 2026);
$stoDni = 100 * 24 * 60 * 60;
$dataStudniowki = $docelowaData - $stoDni;
echo "Data studniówki to: " . date("d.m.Y h:i:sa", $dataStudniowki);
?>
