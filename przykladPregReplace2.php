<?php
$text = "To    jest    tekst    z  wieloma    spacjami";
$result = preg_replace("/\s+/", " ", $text);
echo $result;  // Wynik: To jest tekst z wieloma spacjami
?>
