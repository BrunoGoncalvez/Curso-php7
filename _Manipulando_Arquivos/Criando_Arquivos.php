<?php

    $file = fopen("log.txt","a+"); // fopen() = Cria ou abri arquivo  |   
    //w+ = Adiciona conteúdo e apaga o anterior.
    //a+ = Adiciona conteúdo mantendo o anterior.
    // A variável $file irá se torná uma variável Resource->Faz referencia a um arquivo externo

    fwrite($file, date("Y-m-d H:i:s")."\n");// Escreve no Arquivo

    fclose($file);

    echo "Arquivo criado com sucesso!";

     



?>