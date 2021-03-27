<?php

    require_once('Config.php');

    //Vai usar a class Register do namespace Cliente
    use Cliente\Register;


    $register = new Register();
    $register->setName("Bruno Gonçalves");
    $register->setEmail("Bruno@Gmail.com");
    $register->setPassword(123456);

    $register->registerPurchase();




?>