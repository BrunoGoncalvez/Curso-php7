<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>

    <style>
        body{
            font-family: sans-serif;
        }
        p{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?PHP

        // O FOREACH serve para percorrer Arrays e Coleções

    $meses = array(
        "January", "February", "March", "April", "May", "June", "July", "August", "Setember", "October", "November", "December"
    );

         //  $Array as $Indice e $GuardaValor
    foreach ( $meses as $index => $mes){

        echo "<p>Index: $index <br>";
        echo "Month: " . $mes . "</p>";

    }

    ?>
</body>
</html>