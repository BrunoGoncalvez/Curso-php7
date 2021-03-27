<?php

    $a = 10;

    function changeValue(&$b){  
        //Passagem de parâmetro por referência & antes da variável
        // Irá mudar o valor da variável fora do escopo
        $b = 50;
        return $b;
    }

    function soma(int ...$values):string{ // :string = retornará uma string.
        //Declaração de tipos escalares
        return array_sum($values);
    }

    $value1 = soma(2.5, 7.5);//Vai ignorar os decimais
    echo $value1;
    echo "<br>";
    $value2 = soma(2, 8); 
    var_dump($value2); 

    // echo changeValue($a);
    // echo "<br>";
    // echo $a;
   
    
?>