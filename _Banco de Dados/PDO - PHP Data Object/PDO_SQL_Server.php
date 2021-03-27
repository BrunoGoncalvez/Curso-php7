<?php

    $servidor = "localhost";
    $user = "sa";
    $senha = "1234567";
    $dbname = "db_php_hcode";

    try{
        $conn = new PDO("sqlsrv:Database=$dbname;server=$servidor\SQLEXPRESS; ConnectionPooling=0", $user, $senha);  
    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    
    $stmt = $conn->prepare("SELECT * FROM tb_usuarios;");
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($results);


?>