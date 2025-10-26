<?php

function escape($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/* This function renders a view and extracts the parameters */
function render($view, $params) {

    extract($params);

    ob_start();
    require __DIR__ . '/../views/pages/' . $view . '.php';
    $contents = ob_get_clean();
    $alphabet = gen_alphabet();

    require __DIR__ . '/../views/layouts/main.view.php';
}

/* This function generates an alphabet from A to Z */
function gen_alphabet() {
    $alphabet = range('A', 'Z');
    return $alphabet;
}

gen_alphabet();
