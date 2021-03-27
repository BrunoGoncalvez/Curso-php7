<?php

    /* ESSA FUNÇÃO __AUTOLOAD() FOI DEPRECIADA NA VERSÃO 7.2 DO PHP, PODENDO GERAR ERRO NO CÓDIGO
       É RECOMENDADO o USO DA FUNCÃO SPL_AUTOLOAD_REGISTER()      */



    function __autoload($nameClass){
        //A função receberá o nameClass da qual o Objeto foi Instânciado, Nesse Caso DelRey.php;
        // Depois de Buscar a Classe DelRey ele retornará a Classe Pai de DelRey que é a Classe Automovel.php
        var_dump($nameClass);
        require_once("$nameClass.php");
    }

    $carro = new  DelRey();

    // Método da acelerar está na Classe Automovel.php
    $carro->acelerar(100);

?>