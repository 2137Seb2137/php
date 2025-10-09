<?php
$text = "tekst1tekst2tekst3";
$parts = preg_split("/\d+/", $text);
print_r($parts);
?>
