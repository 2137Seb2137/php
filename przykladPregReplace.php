<?php
$text = "<b>To jest ważne</b>";
$result = preg_replace("/<[^>]*>/", "", $text);  // Usunięcie wszystkich tagów HTML
echo $result;  // Wynik: To jest ważne
?>