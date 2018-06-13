<!DOCTYPE HTML>
<html>
<body>
<form action="imprimir.php" method="post">
    <label>
        Nome: <input type="text" name="nome"><br>
    </label>

    <label>
        E-mail: <input type="email" name="email"><br>
    </label>
    <br>
    <label>
        Como voce ficou sabendo desse site?<br>
        Indicacao: <input type="checkbox" name="como[]" value="Indicação"><br>
        Facebook.: <input  type="checkbox" name="como[]" value="facebook"><br>
        Twitter..: <input type="checkbox" name="como[]"   value="Twitter"><br>
        <br>
    </label>

    <label>
        Sexo:<br>
        <input type="radio" name="sexo" value="Masculino">Masculino<br>
        <input type="radio" name="sexo" value="Feminino">Feminino<br>
        <input type="radio" name="sexo" value="Outro">Outro<br>
    <label>
    <br>

    Dormiu bem ontem?
        <select class="" name="sono">
            <?php
                for ($i=1; $i <= 10; $i++)
                {
                    echo "<option value=".$i.">$i</option>";
                }
            ?>
        </select><br>
    </label>
<hr>
 <input type="submit">
 <input type="reset">
 
</form>
</body>
</html>
