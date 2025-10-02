<?php
function divide($dividend, $divisor){
    if($divisor ==0){
        throw new exception("division by zero");
        }
    return $dividend/ $divisor;
    }
echo divide(5,0);
?>
