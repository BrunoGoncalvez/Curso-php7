<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach com Formulários</title>
</head>

    <body>
        <form>
            <div>
                <p>
                    <label for="">Name: </label>
                    <input type="text" name="nome">
                </p>
            </div>

            <div>
                <p>
                    <label for="">Date of birth:</label>  
                    <input type="date" name="nascimento">
                </p>
            </div>

            <div>
                <input type="submit" value="Enviar">
            </div>
        </form>    

        <?php

        echo "<br>";

            if(isset($_GET)){

                foreach ($_GET as $key => $value){
                    echo "Nome do campo: $key <br>";
                    echo "Valor do campo: $value <hr>";
                }

            }
        
        ?>

    </body>
</html>