<?php

    require_once("Config.php");

    $banco = new Banco();

    $usuarios = $banco->select("SELECT * FROM tb_usuarios ORDER BY des_login");

    $headers = array();

    foreach($usuarios[0] as $key => $value){

        array_push($headers, ucfirst($key));

    }

    $file = fopen("usuarios.csv", "w+");

    fwrite($file, implode(",", $headers) . "\r\n");

    foreach($usuarios as $row){

        $data = array();

        foreach($row as $key => $value){

            array_push($data, $value);

        }

        fwrite($file, implode(",", $data) . "\r\n");

    }

    fclose($file);

?>