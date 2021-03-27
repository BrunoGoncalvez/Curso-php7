<?php

    require_once 'Config.php';

    $myID = session_id();
    echo "Meu ID de sessão: $myID";

    echo '<br>';

    $myID = session_regenerate_id();
    echo "Novo ID: $myID";

    echo '<br>';

    var_dump($_SESSION);

?>