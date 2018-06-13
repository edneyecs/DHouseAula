<?php

    $vlr = rand(0,100);
    
    if ($vlr >= 50 && $vlr%2 == 0)
    {
        echo "O valor e maior que 50 e um numero par:  $vlr";
    } 
    elseif ($vlr ==0)
    {
        echo "o valor não e maior que 50, mas e igual a $vlr ";
    }
    else
    {
        echo"o valor e menor que 50... $vlr";
    }

?>