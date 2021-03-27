<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "db_php_hcode";

    $conn = new PDO("mysql:host=$server; dbname=$dbname", $user, $password);

    /*  Abrindo Transação */
    $conn->beginTransaction();

    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id_usuario = ?");

    $id = 3;

    $stmt->execute(array($id));

    $conn->rollBack();// Não exclui
    //$conn->commit(); // Confirma exclusão

    echo "Excluido com sucesso!";


?>