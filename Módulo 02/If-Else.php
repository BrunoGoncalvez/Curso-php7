<?php

    $idadeCliente = 20;
    $idadeCrianca = 12;
    $idadeAdulto = 18;
    $idadeIdoso = 60;


    if($idadeCliente <= $idadeCrianca){

        echo 'Criança';

    }else if($idadeCliente < $idadeAdulto){

        echo 'Adolescente';

    }else if($idadeCliente < $idadeIdoso){

        echo 'Adulto';

    }else {

        echo 'Idoso';

    }

    echo '<br>';

    echo '<h4> Operadores Ternários </h4><br>';

    echo ($idadeCliente < $idadeAdulto)?"Menor de Idade":"Maior de Idade";



?>