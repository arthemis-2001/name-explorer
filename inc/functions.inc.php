<?php

function escape($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/* This function generates an alphabet from A to Z */
function gen_alphabet() {
    $alphabet = range('A', 'Z');
    return $alphabet;
}

gen_alphabet();
