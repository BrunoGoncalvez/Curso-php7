<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha =  "";
    $banco = "db_php_hcode";

    //Variavel "cn" receberá a conexão;
    //Usando a classe PDO para criar a conexão
    try{
        $conn = new PDO("mysql:host=$servidor; dbname=$banco", $usuario, $senha);
    }catch(PDOException $e){
        echo "Erro: ".$e->getMessage();
    }  


    //$conn = new PDO("mysql:dbname=;host=localhost", "", "");

    $stmt = $conn->prepare("SELECT * FROM tb_usuarios");
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Foreach vai ler o Array vindo do fetchAll();
    //$key == id_usuarios, des_login...    $value =  valores na linha
    foreach($results as $row){
        foreach($row as $key=>$values){
            echo "<strong>$key:</strong> $values <br>";
        }   
        echo "<br>";
    }

    var_dump($results);

?>