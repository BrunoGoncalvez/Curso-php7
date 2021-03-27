<?php

    require_once("Funcoes.php");

    //echo "José Recebeu três salários: " . (salario()*3); 

    // echo ola(); 

    // echo "<br>";

    // $frase = ola();
    // echo strlen($frase);


    $welcome = welcome("Bruno", "Gonçalves");
    $welcome1 = welcome("Matheus", "Gonçalves");
    $welcome2 = welcome("Pedro", "Gonçalves");

    echo $welcome;
    echo $welcome1;
    echo $welcome2;

    echo "<br>";

    $args = argumentos("Hello World!!!");
    var_dump($args);

?>