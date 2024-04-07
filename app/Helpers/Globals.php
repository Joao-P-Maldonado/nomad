<?php

function dd($params){
    echo '<pre style="
        background: black; 
        color: yellow; 
        font-size: 16px;
        padding: 24px 16px;
    ">';
        echo "DEBUG";
        echo '<br>';
        echo "--------------------------";
        echo '<br><br>';

        var_dump($params);
    echo '</pre>';
    die();
}

