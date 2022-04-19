<?php

//Date format helper

function formatDate($date){

    return date('F j, Y, g:i a', strtotime($date));
}

//Shorten text helper
function shortenText($text, $chars = 450){
    $text = substr($text, 0, $chars);
    $text = substr($text, 0, strrpos($text, ' '));
    $text =$text."...";
    return $text;
}

?>