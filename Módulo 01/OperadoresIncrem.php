<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 
        /*    --> Operadores de Incremento e Decremento <--      */

        $a = 10;

        echo $a++;
        echo'<br>';
        echo $a;

        echo'<br>';
        echo ++$a;

        echo'<br>';
        echo --$a;

        echo'<br>';

    
        /* --> Precedência de Operadores <--  */

        $resultado = 10 + 3 / 2;

        echo $resultado;

        echo'<br>';

        $resultado2 = (10 + 3) / 2;

        echo $resultado;

        echo'<br>';

        $resultado2 = (10 + 3) / 2 > 5 && 10 + 5 < 3;

        var_dump($resultado2);

        echo'<br>';

    
    ?>
</body>
</html>