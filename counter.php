<?php

    // Bismillaahirrahmaanirrahiim
    // Alllahumma sholli 'alaa sayyidinaa Muhammad
    // Created by marjuqi, jan 2020
    // simple counting widget using php+js

    // 
    // these "rand()" are for testing only, 
    // 
    // in the real world,
    // they may come from database counting queries
    // or files-related counting on the server folder, 
    // or any mathematical calculations..
    // 

    $n_reg_word     = rand(1000,3000);
    $n_translation     = rand(1000,10000);
    $n_visitor         = rand(100,500);
    $n_subscriber         = rand(700,900);

    $result = array(
        "n_reg_word" => $n_reg_word,
        "n_translation" => $n_translation,
        "n_visitor" => $n_visitor,
        "n_subscriber" => $n_subscriber,
    );

    echo json_encode($result);
    die();
?>
