<?php

    function ola(){
        return "Hello World!";
    }

    function salario(){
        return 946.00;
    }

    function welcome($name, $lastname){

        echo "Bem-vindo $name $lastname!<br>";

    }

    function argumentos(){

        $args = func_get_args();
        return $args;
    }

?>