<?php

    interface Veiculo{

        /*  --> Métodos que a classe Veiculos deve ter para o código rodar, caso contrário apresentará erro <--  */
        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMarcha($marcha);

    }


    /* --> A Classe Civic deve implementar a interface Veiculo <--   */
    class Civic implements Veiculo{

        public function acelerar($vel){ // O nme da variável não precisa ser o mesmo, mas o da classe DEVE ser o mesmo
            
            echo "O veículo acelerou até: $vel Km/h.";

        }

        public function frenar($vel){

            echo "O veículo frenou até: $vel Km/h";

        }

        public function trocarMarcha($marcha){

            echo "O veículo engatou a marcha $marcha.";

        }

    }



    $carro = new Civic();
    $carro->trocarMarcha(3);
    



?>