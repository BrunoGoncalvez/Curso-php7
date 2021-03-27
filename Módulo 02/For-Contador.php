<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR - Contador</title>

    <style>
        body{
            font-family: sans-serif;
        }
    </style>

</head>
<body>
    <?php

        // for($i = 0; $i <= 1000; $i+=5){ //Pulando 5 em 5

        //     echo $i . "<br>";

        // }

            /*  Formas Diferentes  */

        // for($i = 0; $i <= 1000; $i+=5){ //Pulando 5 em 5

        //     if($i >= 200 && $i <= 800) 
        //         continue;

        //     if($i === 900)
        //         break;
                
        //     echo $i . "<br>";

        // }

        $year = date("Y");

        echo "<h4>'$year'</h4>";

    // Usando For para criar um formulário

    echo "<select>";

        for($i = date("Y"); $i >= date("Y")-100; $i--){
            
            echo '<option value="'.$i.'">'.$i.'</option>';

        }

    echo "</select>";

    ?>
</body>
</html>
