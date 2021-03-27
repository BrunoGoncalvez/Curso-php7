<?php

    require_once 'Config.php';

    /* session_unset(); pode dar erro, poís a função não espera parametros
        ela exclui todas as variáveis de sessão  */

    session_unset($_SESION['sessao']); //apaga as variáveis de sessão

    /* O melhor seria usar a função unset($_SESSION['nome']); */ 


    echo $_SESSION['sessao'];

    //session_destroy(); // Destroi a sessão

?>