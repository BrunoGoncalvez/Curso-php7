<?php

    $filename = "usuarios.csv";

    if(file_exists($filename)){

        $file = fopen($filename, "r"); // r = Reader

        // Explode() transforma a string em um array() separados na vírgula
        $headers = explode(",", fgets($file)); // fgets = Pega a primeira linha do arquivo
        $data = array();

        while($row = fgets($file)){

            $rowData = explode(",", $row);

            $linha = array();

            for($i = 0; $i < count($headers); $i++){

                $linha[$headers[$i]] = $rowData[$i];

            }

            array_push($data, $linha);

        }

        echo json_encode($data); 

        fclose($file);

    }


?>