<?php

    /*  --->  VETOR = ARRAY UNIDIMENSIONAL  <-----  */ 

    // $frutas = array("Laranja", "Abacaxi", "Uva", "Maça");
    // print_r($frutas);



    /* ----> ARRAY = ARRAY BIDIMENSIONAL <----    */ 

    // $carros[0][0] = "Ford";
    // $carros[0][1] = "Camaro";
    // $carros[0][2] = "Onyx";
    // $carros[0][3] = "Cobalt";

    // $carros[1][0] = "Fusion";
    // $carros[1][1] = "Eco Sport";
    // $carros[1][2] = "Fiesta";
    // $carros[1][3] = "Sandero";

    // //echo $carros[0][0];

    // echo end($carros[1]) . "<br>"; // Retornará o ultimo indice na linha 1;
    // echo end($carros[0]); // Retornará o ultimo indice na linha 0;



    /* ----->  TRATAMENTO DE ARRAYS  <------  */

    $pessoas = array();

    // Array_Push() = Adiciona elementos ao array 
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
    echo "<p>"; 
    print_r($pessoas[0]['Nome']);
    echo "</p>";






?>