<?php

    abstract class Animal{

        public function falar(){
            return "Som";
        }

        public function mover(){
            return "Anda";
        }

    }

    class Cachorro extends Animal{

        /*  Polimorfismo do Método falar(); */
        public function falar(){
            return "Late";  //Polimorfismo = Mudar método "Original"
        }

    }

    class Gato extends Animal{

        public function falar(){
            return "Miau";  //Polimorfismo = Mudar método "Original"
        }

    }

    class Passaro extends Animal{

        public function falar(){
            return "Canta";  //Polimorfismo = Mudar método "Original"
        }

        public function mover(){
            return "Voa" . " e " . parent::mover(); // parent irá chamar o método da Classe "PAI" (static).
        }

    }

    $pluto = new Cachorro();

    echo $pluto->falar();
    echo "<br>";
    echo $pluto->mover();

    echo "<br>";
    echo "<br>";

    $gato = new Gato();

    echo $gato->falar();
    echo "<br>";
    echo $gato->mover();

    echo "<br>";
    echo "<br>";

    $ave = new Passaro();

    echo $ave->falar();
    echo "<br>";
    echo $ave->mover();



?>