<?php

    interface Veiculo{

        /*  --> Métodos que a classe Veiculos deve ter para o código rodar, caso contrário apresentará erro <--  */
        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMarcha($marcha);

    }


    /* --> Na classes Abstracts não se instância objetos diretamente. É preciso criar classes filhos(Herança) <-- 
       --> A classe abstract ela implemeta uma Interface com os 'Métodos Prontos' */
    abstract class Automovel implements Veiculo{

        public function acelerar($vel){
            
            echo "O veículo acelerou até: $vel Km/h.";

        }

        public function frenar($vel){

            echo "O veículo frenou até: $vel Km/h";

        }

        public function trocarMarcha($marcha){

            echo "O veículo engatou a marcha $marcha.";

        }
    }

    class DelRey extends Automovel{

        public function empurrar(){



        }

    }

    //$carro =  new Automovel(); // Caso uma classe Abstract instancie um objeto dará ERRO FATAL
    $carro =  new DelRey();
    $carro->acelerar(200);



?>