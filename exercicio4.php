<?php
    $carro = [];
    $carro["marca"] = ["Preto", "Verde"];
    $carro["modelo"] = ["Ford", "Fiat"];
    $carro["cor"] = ["Preto", "Verde"];
    $carro["ano"] = [1992, 2005];

    $carro["Preto"] = "Azul";
    
?>

<pre>
    <?php
    //var_dump($carro);
    echo $carro["Preto"];


    ?>

</pre>