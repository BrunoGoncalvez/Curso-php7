<?php

    $data = array(
        "empresa"=>"Hcode Treinamentos",
        "site"=>"Hcode.com"
    );

    setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

    echo "OK";

?>