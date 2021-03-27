<?php

    function test($callback){
        //$CallBack = Utilizados para processos lentos
        $callback();
    }


    test(function(){
        echo "Processo finalizado!";
    });


    $fn = function($a){
        var_dump($a);
    };

    $fn("Hello!");

?>