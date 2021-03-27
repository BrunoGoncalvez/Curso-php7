<?php

    $conn = new mysqli("localhost", "root", "", "db_php_hcode");

    if($e = $conn->connect_error){
        echo "Error: $e";
    }else{
        echo "Conexão feita com sucesso.";
    }

    // Irá retorna um result que será guardada na variável $result
    $result = $conn->query("SELECT * FROM tb_usuarios ORDER BY des_login");
    $data = array();


    // Se o dado existir irá retorna o dado e guardará na variável $row
    while($row = $result->fetch_assoc()){

        array_push($data, $row);

    }

    echo json_encode($data);


?>