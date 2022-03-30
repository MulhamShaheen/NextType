<?php

function convertFullName($string)
{
    $tmp = explode(" ", $string);
    $lastname = $tmp[0];
    $firstname = $tmp[1];
    $secondname = $tmp[2];
    $result = $lastname . " " . $tmp[1][0] . ". " . $tmp[2][0] . ".";

    return $result;
}

echo convertFullName('Иванов Иван Иванович');

?>