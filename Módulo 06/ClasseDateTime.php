<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
            body{
                font-family: Arial, sans-serif;
                color: #262626;
            }
        </style>
    </head>
    <body>

    <?php
        $dt = new DateTime();
        $periodo = new DateInterval("P15D");// Periodo de 15 dias  ->  P15D

        echo $dt->format("d/m/Y H:i:s");

        $dt->add($periodo); // Irá adiciona 15 dias à data

        echo "<br>";

        // A variável $dt está chamando o método format()
        echo $dt->format("d/m/Y H:i:s");

    ?>

    </body>
</html>


