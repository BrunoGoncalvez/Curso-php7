<?php

    class Pessoa{

        public $nome = "Bruno"; //Public -> Todos podem acessar
        protected $idade = 23;  // Protected -> Classe Herdeiras podem acessar 
        private $senha = "123"; //Private é mais protegido que protected, nem mesmo herdeiros podem acessar(fora da classe).
        

        // Método irá consegue acessar atributos private e protected, poís está na mesma classe
        public function mostrarDados(){
            echo "Nome: ".$this->nome."<br>";
            echo "Idade: ".$this->idade."<br>";
            echo "Senha: ".$this->senha;
        }
    }

    /*  Classe Programador é herdeira da classe Pessoa, 
        ou seja, poderá acessar quase todos métodos e atributos exceto os private */
    class Programador extends Pessoa{

        public function mostrarDados(){

            echo "Classe de Origem: ".get_class($this)."<br>"; // Verifica de qual classe o objeto foi instânciado

            echo "Nome: ".$this->nome."<br>"; //Poderá acessar, poís é PUBLIC
            echo "Idade: ".$this->idade."<br>"; //Poderá acessar, poís é PROTECTED
            echo "Senha: ".$this->senha; // Não poderá acessar, poís é PRIVATE
        }

    }



    $objeto = new Programador(); //Será chamado o método da class Programador
    
    $objeto->mostrarDados(); // Método Public

    // echo $objeto->nome."<br>";
    // echo $objeto->idade."<br>";
    // echo $objeto->senha."<br>";

    





?>