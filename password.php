<?php
$word_list = Array(
    'random',
    'word',
    'generator',
    'apples',
    'oranges',
    'milk',
    );

$number_list = '0123456789';
$symbol_list = '@#$%^&*!~';

function generatePassword($words, $numbers, $symbols) {
    
    global $word_list, $number_list, $symbol_list;
    $password = '';
    for ($i = 0; $i < $words; $i++) {
        $password .= $word_list[(rand() % $word_list.count())];
        if ($i != $words -1)
            $password .= '-';
    }
    if($numbers){
    $password .= $number_list[(rand() % strlen($number_list))];
    }

    if($symbols){
    $password .= $symbol_list[(rand() % strlen($symbol_list))];
    }

    return $password;
}
 
?>