<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <?php

        /*  ---> TRANSFORMANDO O ARRAY EM JSON(ENCODE) <----  */

            $pessoas = array();

            array_push($pessoas, array(
                'Nome' => 'João',
                'Idade' => 20
            ));

            array_push($pessoas, array(
                'Nome' => 'José',
                'Idade' => 25
            ));

            print_r($pessoas);

            echo "<br>";
            
            echo json_encode($pessoas);

        ?>

        


    </body>
</html>


