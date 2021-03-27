<?php


    /*  --> Exemplo com Try e Catch (obrigatórios) <--   */

    // try{
    //     throw new Exception("Houve um erro", 400);
    // }catch(Exception $e){
    //     echo json_encode(array(
    //         "Message" => $e->getMessage(),
    //         "Linha"=>$e->getLine(),
    //         "File"=>$e->getFile(),
    //         "Code"=>$e->getCode()
    //     ));
    // }

    
    /*  --> Try e Catch com bloco 'Finally'(Opcional)  <--   */

    function trataNome($name){

        if(!$name){
            throw new Exception("Nenhum nome foi informado!<br>", 1);
        }

        echo ucfirst($name)."<br>";

    }

    try{

        trataNome("Bruno");
        trataNome("");

    }catch(Exception $e){

        echo $e->getMessage();

    }finally{

        echo "Executou o Try";

    }



?>