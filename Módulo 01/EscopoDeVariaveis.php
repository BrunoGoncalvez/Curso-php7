<?php //Inicio Escopo Global

    $name = 'Bruno';

    function test($name){ // Inicio do Escopo

        echo $name;

    }// Fim do Escopo


    function test1(){ // Inicio do Escopo

        global $name; // Usar a variável do escopo global
        echo $name;

    } // Fim do Escopo

    echo $name,'<br>';

    test('Bruno Gonçalves');
    test1('Pedro Henrique');




     //Fim Escopo Global
?>