<?php
$wyrazenie = '/\d\d\d\d\d/';
$tekst = "telefon: 66666666";
// preg match() sprawdza wystepowanie wyrazenia w ciagu
if(preg_match($wyrazenie,$tekst))
    echo("Znaleziono podany wzorzec.")
else
    echo("Nie znaleziono podanego wzorca.");
?>
