<?php

    $name = "imagens";

    // Se o diretório da variavel $name não(!) existir
    if(!is_dir($name)){
        // Crie o diretório com nome na variável $name
        mkdir($name);// MakeDIR = Criar Diretório
        echo "Diretório $name criado com sucesso.";
       
    }else{
        rmdir($name); // rmdir = Remove Diretório
        echo "O diretório $name já existe.";
    }



?>