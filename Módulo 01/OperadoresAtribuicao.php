<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores PHP</title>

    <style>
        *{
            font-family: sans-serif;
            color: #262626;
        }
    </style>
</head>
    <body>
        <?php
        /*   -->  Operadores de Atribuição  <--   */

        echo '<h3>Operadores de Atribuição (  + , - , += , -= , *= , .= )</h3>';

        echo '<br>';

        $name = "Bruno";
        echo $name . ' de Souza<br>';

        // O operador .= irá adicionar o valor à variável
        $name .= ' Gonçaves';
        echo 'Teste .= : ', $name, '<br>';

        // Irá juntar os dois números ficando 1010
        $testNumber = 10;
        $testNumber .= 10;
        echo $testNumber;

        // Irá Somar ou Subtrair do valor já existente na variável
        $totalValue = 0;
        $totalValue += 100;
        $totalValue += 200;
        $totalValue -= 100;
        echo '<br>', $totalValue;

        //   Porcentagens
        $valueOff = 100;
        $valueOff *= .9;  // 0.9 = 90% do valor da variável
        echo '<br>', $valueOff;


    ?>
    </body>
</html>








