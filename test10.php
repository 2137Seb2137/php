<?php
     echo strlen("Hello world!"); //outputs 12
     echo strlen("Łódź"); //outputs 7
     // polskie znaki w unicode zajmują 2 bajty


     echo mb_strlen("Łódź"); //Outputs4
?>