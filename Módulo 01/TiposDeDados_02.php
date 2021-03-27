<?php

    /*    Tipos Básicos ou Tipos Primitivos    */

    $name = 'Bruno Gonçalves';
    echo 'Variável $name ',var_dump($name);

    $year = 2020;
    echo 'Variável $year ',var_dump($year);

    $salario = 5500.99;
    echo 'Variável $salario ',var_dump($salario);

    $break = false;
    echo 'Variável $break ',var_dump($break), '<br>';


    // -------------------------------------------------------------------  //


    /*        Tipos Compostos       */

    // Arrays
    $frutas = array('Abacaxi','Laranja', 'Uva', 'Manga', 'Maracujá');

    var_dump($frutas);

    echo 'Array posição 0: ', $frutas[0], '<br>';
    echo 'Array posição 0: ', $frutas[1], '<br>';
    echo 'Array posição 0: ', $frutas[2], '<br>';

    // -->  Criando Objeto(DateTime)  <--
    $dataNascimento = new DateTime();
    echo var_dump($dataNascimento);


    
    // --> Tipo Resource  <--
   
    $arquivo = fopen("Variaveis.php", "r");
    echo var_dump($arquivo);



    // --> Tipo null <--

    $nulo = NULL; // Ausência de valor
    $vazio = ""; // Existe o espaço mas está vázio (Bolsa vázia)

    echo var_dump($nulo);
    echo var_dump($vazio); 



?>