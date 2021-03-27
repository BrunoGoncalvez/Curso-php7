<?php

    // Obs: Include tentará executar a aplicação mesmo se o arquivo não existir ou tiver com erro
    //include 'Includes/IncludeRequire.php';

    //Obs: Require obriga que o arquivo exista e que esteja funcionando corretamente
    //require 'Includes/IncludeRequire.php'; 

    // Chamará o arquivo apenas uma vez na página
    require_once 'Includes/IncludeRequire.php';



    $resp = Somar(5, 7);
    echo $resp;

?>