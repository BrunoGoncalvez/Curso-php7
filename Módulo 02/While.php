<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> WHILE </title>
    </head>

    <body>


    <?php
    
    $total = 100;
    $off = 0.9;

    do{

        $total *= $off;

    }while($total > 100);

    echo "Total: $total ";
        // $condicao = true;

        // while($condicao){
        //     $numero = rand(1, 10);

        //     if($numero === 3){
        //         echo "<br>Conseguiu: Três!";
        //         $condicao = false;
        //     }

        //     echo "$numero ";

        // }
    ?>

    </body>
</html>

















