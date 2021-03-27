<?php

    require_once("Config.php");

    echo "Session Save Path: ",session_save_path(); // Mostra pasta de armazenamento temporária do site

    echo "<br>";

    echo "<br>";
    
    switch(session_status()){
        case PHP_SESSION_DISABLED:
            echo "Sessões Desabilitadas";
            break;

        case PHP_SESSION_NONE:
            echo "Sessões Habilitadas";
            break;

        case PHP_SESSION_ACTIVE:
            echo "Sessões Habilitas. Já existe uma Sessão Aberta";
            break;

        default:
        echo "Erro";
        break;
    }

?>