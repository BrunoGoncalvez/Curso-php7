<?php

    /* ----> TRANSFORMA O JSON EM ARRAY(DECODE)  <---- */

    $json = '[{"Nome":"Jo\u00e3o","Idade":20},{"Nome":"Jos\u00e9","Idade":25}]';

    // Com o parametro true será transformado em um array
    // Sem o parametro true será transformado em um objeto
    $data = json_decode($json, true);

    var_dump($data);

?>