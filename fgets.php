<?php
$myfile = fopen("bitnami.css","r");
           or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>
