<?php

namespace Cliente;

    class Register extends \Register{

        public function registerPurchase(){

            echo "Foi registrada uma venda para o cliente ".$this->getName();

        }

    }   

?>