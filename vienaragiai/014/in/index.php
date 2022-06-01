<?php

define('INSTALL', '/php-paskaitos/vienaragiai/014/in/');

$uri = str_replace(INSTALL, '', $_SERVER['REQUEST_URI']);
$uri = explode('/', $uri);


// ROUTER

if(count($uri) == 2) {
    if($uri[0] == 'kambarys') {
        if($uri[1] == 1) {
            require __DIR__ . '/app/k1.php';
        } elseif ($uri[1] == 2) {
            require __DIR__ . '/app/k2.php';
    } else {
        require __DIR__ . '/app/404.php';
    }
} elseif ($uri[0] == 'add-funds') {
    $userId = $uri[1];
    require __DIR__ . '/app/addMoney.php';
}else {
    require __DIR__ . '/app/404.php';
}
}



?>