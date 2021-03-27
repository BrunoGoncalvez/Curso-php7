<?php

    require_once ("vendor/autoload.php");

    use Rain\Tpl;

    // config
    $config = array(
        "tpl_dir"       => "templates/",
        "cache_dir"     => "cache/",
    );

    Tpl::configure( $config );

    // create the Tpl object
    $tpl = new Tpl;

    // assign a variable
    $tpl->assign( "name", "Hcode Treinamentos" );
    $tpl->assign( "version", "Versão PHP");

    // assign an array
    //$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

    // draw the template
    $tpl->draw( "index" );

?>