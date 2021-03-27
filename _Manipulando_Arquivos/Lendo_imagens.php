<?php

    $imagens = scandir("imagens"); // scandir() = Scannear Diretório. Retorna um array()
    $data = array();

    foreach($imagens as $value){
        if(!in_array($value, array(".",".."))){

            $filename = "imagens".DIRECTORY_SEPARATOR."$value";

            $info = pathinfo($filename); // retorna dados do arquivo. Como nome, extensão, pasta, etc.
            $info["size"] = filesize($filename);// Tamanho do arquivo em bytes
            $info["modified"] = date("d/m/Y H:i:s", filemtime($filename)); // mostrá dia e hora da ultima modificação do arquivo.
            $info["url"] = "http://localhost/Curso%20PHP/Manipulando_Arquivos/".str_replace("\\","/",$filename);
            // str_replace = inverte a barra do diretório
            array_push($data, $info);

        }
    }

    echo json_encode($data);


?>