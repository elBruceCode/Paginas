<?php

function conectarDB():mysqli{
    $DB = new mysqli('HOST','USER','PASSWORD','DATABASE');

    if($DB->connect_error){
        echo "Hubo Un Error Al Conectar La Base de datos";
    }else{
        return $DB;
    }
}
conectarDB();