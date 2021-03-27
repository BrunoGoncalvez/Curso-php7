<?php

    /*  --> Criando Imagem do zero com PHP <-- */

    // header("Content-Type: image/png");
    // $image = imagecreate(256, 256);

    // $black = imagecolorallocate($image, 0, 0, 0);
    // $red = imagecolorallocate($image, 255, 0, 0);

    // imagestring($image, 5, 60, 120, "Curso PHP 7", $red );
    // imagepng($image);

    // imagedestroy($image);



    /*  --> Criando Imagem com base em outra imagem <--  */
    $image = imagecreatefromjpeg("Images/2.1 certificado.jpg");

    $titleColor = imagecolorallocate($image, 0, 0, 0);
    $gray = imagecolorallocate($image, 100, 100, 100);

    imagestring($image, 5, 450, 150, "Certificado", $titleColor);
    imagestring($image, 5, 440, 350, "Divanei Aparecido", $titleColor);
    imagestring($image, 3, 450, 370, utf8_decode("Concluído em: ").date("d/m/Y "), $titleColor);

    header("Content-Type: image/jpeg");
    imagejpeg($image, "Certificado-".date("Y-m-d").".jpg");
    imagedestroy($image);


?>