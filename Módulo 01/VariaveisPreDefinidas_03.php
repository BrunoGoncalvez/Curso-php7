<?php

    /*   Variáveis Pré-Definidas ou Arrays SuperGlobais  */

    // Todas variáveis que virem por GET ou POST serão do tipo String
    $nome = (int)$_GET['usuario'];
    $userr = (int)$_GET['user'];
    var_dump($nome);
    var_dump($userr);

    // Pegar IP do usuário
    $ip = $_SERVER['REMOTE_ADDR'];
    echo $ip, '<br>';

    // Pegar URL de acesso
    $server = $_SERVER['SCRIPT_NAME'];
    echo $server; 

?>