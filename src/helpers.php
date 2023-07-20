<?php

function e(string $string)
{
    $str = htmlentities($string, ENT_COMPAT, "UTF-8");
    return $str;
}