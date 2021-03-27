<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data e Hora PHP</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            color: #262626;
        }
    </style>
</head>
<body>
<?php

    $currentYear = date('Y'); // 2021
    echo "<p><b>Current Year: $currentYear</b></p>";

    $year = date("y");
    echo "<p><b>Year Short: $year</b></p>";
    
    $currentDate = date("d/m/Y"); // 01/01/2000
    echo "<p><b>Current Date: $currentDate</b></p>";

    $currentDateHour = date("d/m/Y H:i:s"); //  01/01/2000 12:00:00
    echo "<p><b>Date and Hour: $currentDateHour</b></p>";


    // ------>  TIMESTAMP  <---------


    $timeSecods = strtotime("2001-09-11"); // segundos desde 11 de setembro de 2001
    echo "<p><b>Segundos desde 11-09-2001: $timeSecods</b></p>";

    $timestamp = date("l, d/m/Y", $timeSecods); //Mostrará a data corresponde pelo timeStamp ==> "Domigo, 11-09-2001"
    echo "<p><b>$timestamp</b></p>";

    $timeNow = strtotime("now");
    echo date("l, d/m/Y", $timeNow);

    

    
    
?>
</body>
</html>
