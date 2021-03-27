<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
            body{
                font-family: Arial, sans-serif;
            }
        </style>
    </head>

    <body>

        <form method="get">
            <label for=""><strong> CEP: </strong></label>
            <input type="text" name="user-cep">
            <input type="submit" value="Buscar">
        </form>

        <?php

            $cep = $_GET["user-cep"];

            $link = "https://viacep.com.br/ws/$cep/json/";

            $ch = curl_init($link);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER , 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , 0);

            $response = curl_exec($ch);

            curl_close($ch);

            $data = json_decode($response, true);

            echo("CEP: " . $data["cep"] . "<br>");
            echo("Logradouro: " . $data["logradouro"] . "<br>");
            echo("Complemento: " . $data["complemento"] . "<br>");
            echo("Bairro: " . $data["bairro"] . "<br>");
            echo("Cidade: " . $data["localidade"] . "<br>");
            echo("Estado: " . $data["uf"] . "<br>");


        ?>
    </body>
</html>




<?php

    $cep = "02995000";
    $link = "https://viacep.com.br/ws/$cep/json/";

    $ch = curl_init($link);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER , 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , 0);

    $response = curl_exec($ch);

    curl_close($ch);

    $data = json_decode($response, true);

    echo("CEP: " . $data["cep"] . "<br>");
    echo("Logradouro: " . $data["logradouro"] . "<br>");
    echo("Complemento: " . $data["complemento"] . "<br>");
    echo("Bairro: " . $data["bairro"] . "<br>");
    echo("Cidade: " . $data["localidade"] . "<br>");
    echo("Estado: " . $data["uf"] . "<br>");


?>