<?php
$text = "jabłko, gruszka,banan , śliwka";
$fruits = preg_split("/\s*,\s*/", $text);
print_r($fruits);
?>