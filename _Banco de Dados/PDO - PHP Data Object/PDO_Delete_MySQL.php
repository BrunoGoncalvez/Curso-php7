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

    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id_usuario = :ID ");

    $id=4;

    $stmt->bindParam(":ID", $id);
    $stmt->execute();
    

?>