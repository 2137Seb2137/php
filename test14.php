<?php
// Funkcja printf wypisuje sformatowany ciąg znaków
     $tekst = "Hello";
     printf("[%s]\n", $tekst); // wypisze [Hello]
     printf("[%10s]\n", $tekst); //wypisze [     Hello]
     printf("[%-10s]\n", $tekst); //wypisze [Hello     ]
     printf("[%.3s]\n", $tekst); //wypisze [Hel]
     printf("[%10.3s]\n", $tekst); //wypisze [       Hel]
     printf("[%-10.3s]\n", $tekst); //wypisze [Hel    ]
?>
