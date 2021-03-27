<?php

    class Endereco{

        private $logradouro;
        private $numero;
        private $cidade;

        /*   --> Método Construtor <--  */
        public function __construct($a, $b, $c){
            $this->logradouro = $a;
            $this->numero = $b;
            $this->cidade = $c;
        }

        /*  -->  Método Destruct  <--*/
        public function __destruct(){
            var_dump("DESTRUIDO.");
        }

        /*  --> Método toString <--  */
        public function __toString(){
            // Quando tentar exibir o Objeto usando echo ele retornará a string aaixo.
            return $this->logradouro.", ".$this->numero.", ".$this->cidade.".";
        }
    }

    $myAndress = new Endereco("Rua da Imaginação", "100","São Paulo");

    var_dump($myAndress);

    //unset($myAndress); // Unset = vai chamar o método destruct

    echo $myAndress;

?>