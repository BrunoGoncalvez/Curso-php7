<?php

        //   -->  Operadores de Comparação  <--  

    echo '<br>';
    echo '<br>';
        
    echo '<h3>Operadores de Comparação( == , === , <= , >= , != . !== )</h3>';

    $number1 = 20;
    $number2 = '20';

    echo '<br>';

    var_dump($number1 > $number2);
    var_dump($number1 < $number2);

    echo '<br>';

    var_dump($number1 == $number2);  // Comparando valores
    var_dump($number1 === $number2); // Comparando valores e tipos de dados

    echo '<br>';

    var_dump($number1 >= $number2);
    var_dump($number1 <= $number2);

    echo '<br>';

    var_dump($number1 != $number2); 
    var_dump($number1 !== $number2);
        
    echo '<br>';

    /*   -->  SpaceShip Operator  <--  */
    echo '<h4> SpaceShip </h4>';

    $a = NULL;
    $b = NULL;
    $c = 10;

    var_dump($a <=> $b);
    // Se $a > $b = 1
    // Se $a = $b = 0
    // Se $a < $b = -1

    echo '<br>';

    /*  Comparando Valores Null  */
    echo '<h4> Comparando valores null </h4>';

    // Se $a = null mostrar $b se $b = null mostrar $c
    echo $a ?? $b ?? $c;


?>