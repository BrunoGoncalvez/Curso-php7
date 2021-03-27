<?php

    $name = "Hcode Treinamentos";
    $year = "2020";

    echo $name , " " , $year;

    var_dump($name);  // Saber o tipo de dado dentro da variável

    $anoNascimento = 2020;

    $nomeCompleto = "Bruno Gonçalves";


    $nome = 'Bruno';
    $sobrenome = 'Gonçalves';

    $Fullname = $nome . ' ' . $sobrenome;

    echo $Fullname;

    exit; // Parará a execução do código aqui.

    unset($nomeCompleto, $anoNascimento); //Irá apagar as váriaveis

    if(isset($nomeCompleto)){ // isset = Se existir
        echo $nomeCompleto;
    }
    else{
        echo 'Não existe.<br>';
    }


    $nome = 'Bruno';
    $sobrenome = 'Gonçalves';

    $Fullname = $nome . $sobrenome;

    echo $Fullname;

?>