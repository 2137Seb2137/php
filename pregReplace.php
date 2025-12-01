<?php 
    $str = 'Szukaj w Google!';
    $pattern = '/google/i';
    echo preg_replace($pattern, 'DuckDuckGo', $str);
?>
