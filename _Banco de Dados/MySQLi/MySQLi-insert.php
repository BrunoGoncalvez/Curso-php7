<?php

    $conn = new mysqli("localhost","root","", "db_php_hcode");

    if($e = $conn->connect_error){
        echo "Error: $e ";
    }

    // $stmt = Statement
    $stmt = $conn->prepare("INSERT INTO tb_usuarios(des_login, des_senha) values (?, ?)");
    $stmt->bind_param("ss",$login,$password); // Os dois parametros são strings(varchar) então ss, caso fosse int seria i
    //  método bind_param(); recebe seus parametros por referencias

    $login = "User";
    $password = "123456";
    $stmt->execute(); // Irá executar o Comando;

    $login = "Bruno";
    $password = "123";
    $stmt->execute();

    $login = "Admin";
    $password = "admin";
    $stmt->execute();


?>