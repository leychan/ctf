<?php
/**
 * Created by lei
 * Date 9/15/20
 * Time 10:20 PM
 * Desc
 */

$miwen = "a1zLbgQsCESEIqRLwuQAyMwLyq2L5VwBxqGA3RQAyumZ0tmMvSGM2ZwB4tws";

function decode($str) {
    $str = str_rot13($str);
    $str = strrev($str);
    $str = base64_decode($str);
    //echo $str;
    $e = '';
    for ($a = 0; $a < strlen($str); $a++) {
        $b = substr($str, $a, 1);
        $c = ord($b) - 1;
        $d = chr($c);
        $e .= $d;
    }
    echo strrev($e);
}

decode($miwen);

function encode($str) {
    $b = strrev($str);
    // echo $b;

    for ($a = 0; $a < strlen($b); $a++) {

        $c = substr($b, $a, 1);
        $d = ord($c) + 1;
        $c = chr($d);
        $e = $e . $c;
    }
    return str_rot13(strrev(base64_encode($e)));
}