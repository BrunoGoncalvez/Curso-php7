<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "db_php_hcode";

    try{
        $conn = new PDO("mysql:host=$server; dbname=$dbname", $user, $password);
    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }

    $stmt = $conn->prepare("INSERT INTO tb_usuarios(des_login, des_senha) VALUES (:LOGIN,:PASSWORD)");
    
    $login = "José";
    $password = "123";
    
    $stmt->bindParam(":LOGIN",$login);
    $stmt->bindParam(":PASSWORD",$password);
    $stmt->execute();

    echo "Inserido com sucesso!";

    

?>