<?php

    function incluirClasses($nameClass){
    
        //Verificar se a Classe já existe nesse Diretório
        if(file_exists("$nameClass.php") === true){
            require_once("$nameClass.php");
        }
    }




    /* A função sl_autoload_register()  enxergam pastas fora do diretório  */ 
    /* A função recebe como parametro uma string com o "nome_da_classe" ou uma função */
    spl_autoload_register("incluirClasses");

    spl_autoload_register(function($nameClass){

        if(file_exists("Abstracts" . DIRECTORY_SEPARATOR . $nameClass.".php") === true){
            require_once("Abstracts" . DIRECTORY_SEPARATOR . $nameClass.".php");
            
        }

    });


    $carro = new DelRey();
    $carro->acelerar(80);

?>