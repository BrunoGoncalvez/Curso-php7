<?php 

    interface Veiculo{

        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMarcha($marcha);

    }

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

?>