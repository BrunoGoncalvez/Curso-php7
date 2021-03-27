<?php

    $name = 'Bruno';
    $name2 = "Gonçalves"; 
    // Variáveis com aspas duplas podem ser ultilizadas dentro de aspas.

    var_dump($name, $name2);

    // Interpolação de Variáveis
    echo $name.' '.$name2, "<br>";
    echo "Nome: $name $name2<br>"; // Aspas duplas exibe o valor da variável
    echo 'Nome: $name $name2<br>'; // Aspas simples exibe o nome da variável

    // Funções para Strings

    $exemple = 'Bruno Gonçalves';
    
    $exemple = strtoupper($exemple); // StrToUpper deixará a strings em maíusculo(UpperCase)
    echo "ToUpper: ",$exemple, "<br>";
    
    $exemple = strtolower($exemple);
    echo "ToLower: ",$exemple, "<br>";

    $exemple = ucfirst($exemple);
    echo  $exemple, "<br>"; // Primeira letra ficara ToUpper

    $exemple = ucwords($exemple);
    echo  $exemple, "<br>"; // Primeira letra de cada palavra ficara ToUpper

    $exemple = str_replace("o", "0", $exemple); // Trocará a letra "o" pelo número 0;
    echo $exemple, "<br>";

    $exemple = str_replace("ç", "c", $exemple); // Trocará a letra "n" pelo número 1;
    echo $exemple, "<br>";



     // -->  Buscar Palavra  <--

     $frase = "A presa é inimiga da perfeição.";
     $palavra = "da";
     $query = strpos($frase, $palavra); //retornará o número de casas necessárias para chegar até a palavra "da"

     $antes = substr($frase, 0, 19); // retornará tudo antes da casa 19 

     // StrLen(string) = retorna o tamanho da string.
     //Pegará a frase apartir da $query até o final(strlen($frase)).
     $antes2 = substr($frase, $query + strlen($palavra), strlen($frase));

     echo $antes2, "<br>";
     echo $query, "<br>";



    


    



?>