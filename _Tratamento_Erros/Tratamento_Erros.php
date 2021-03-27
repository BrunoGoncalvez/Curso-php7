<?php

    // /* Função 'Error_Handler' irá receber informações sobre o erro */
    // function error_handler($code, $message, $file, $line){

    //     echo json_encode(array(
    //         "code"=>$code,
    //         "message"=>$message,
    //         "line"=>$line,
    //         "file"=>$file
    //     ));

    // }

    // /*  Função 'set_error_handler' espera como parametro a função error_handler e irá tratar o erros  */
    // set_error_handler("error_handler");

    // echo "<br>" . 110 / 0;

    //  'error_reporting() recebe constantes que irão sobrescrever o php.ini. Nesse caso irá apareceer apenas ERROS e não NOTICE'
    error_reporting(E_ALL & ~E_NOTICE);

    $name = $_GET["name"];

    echo $name;


?>