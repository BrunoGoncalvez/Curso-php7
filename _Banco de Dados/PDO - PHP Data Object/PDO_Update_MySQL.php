<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "db_php_hcode";

    try{
        $conn = new PDO("mysql:host=$server; dbname=$dbname",$user, $password);
    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }

    $stmt = $conn->prepare("UPDATE tb_usuarios SET des_login = :LOGIN, des_senha = :PASSWORD WHERE id_usuario = :ID ");

    $login = "Pedro";
    $password = "senha";
    $id = '2';

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);
    $stmt->bindParam(":ID", $id);
    $stmt->execute();



    




?>