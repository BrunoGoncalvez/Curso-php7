<?php

    if(isset($_COOKIE["NOME_DO_COOKIE"])){

        //var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"], true)); // Com true será criado um array em vez de um objeto
    
        $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);
        echo $obj->empresa;

    }

?>