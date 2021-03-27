<?php

    class Car{

        private $model;
        private $engine;
        private $year;

        /*  CRIANDO MÉTODOS GETTERS E SETTERS  PARA ACESSAR ATRIBUTOS private */
        
        public function getModel(){   // Por Convenção métodos começam com LowerCase
            return $this->model;
        }

        public function setModel($modelo){
            return $this->model = $modelo;
        }

        public function getEngine():float{
            return $this->engine;
        }

        public function setEngine($motor){
            return $this->engine = $motor;
        }

        public function getYear():int{
            return $this->year;
        }

        public function setYear($ano){
            $this->year = $ano;
        }

        public function infoCar(){
            return array(
                "modelo"=>$this->getModel(),
                "motor"=>$this->getEngine(),
                "ano"=>$this->getYear()
            );
        }
    }

    // Instanciando Objeto e nomeando atributos atraves dos métodos Setters
    $objeto = new Car();
    $objeto->setModel("Polo");
    $objeto->setEngine("1.6");
    $objeto->setYear("2000");


    $car = $objeto->infoCar();

    var_dump($car);

    print_r($car);

?>