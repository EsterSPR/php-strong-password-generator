<?php

function pwdGenerate($length){
    $password = '';
    $pwValues = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:\"<>,.?/\\';

    while(strlen($password) < $length){
        $pwSingleValue = $pwValues[randomGenerate($pwValues)];
        $password .= $pwSingleValue;
    }

    return $password;
}

function randomGenerate($string){
    return rand(0, strlen($string) - 1);
}

$alert = '';

if(isset($_GET['pwdLength']) && $_GET['pwdLength'] === ''){
    $alert = 'Nessun parametro valido inserito';
}
elseif(isset($_GET['pwdLength']) && $_GET['pwdLength'] !== ''){
    // var_dump($_GET['pwdLength']);
    $password = pwdGenerate($_GET['pwdLength']);
}

?>