<?php

    // se "img" não(!) for um diretório, então Crie(mkdri())
    if(!is_dir("img")){
        
        mkdir("img");

    }

    foreach(scandir("img") as $item){

        if(!in_array($item, array(".", ".."))){

            unlink("img/" . $item);

        }

    }

    echo "Arquivo deletado com sucesso!";

?>