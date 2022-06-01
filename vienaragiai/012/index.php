<?php

define('KEY', 1);

echo KEY;

// magic const parodo absoliutu kelia
echo __DIR__;


// include uzrasomas absoliutu keliu o ne relativiu
//include '../kitas/vienas.php';
//include '../kitas/vienas.php';
//include '../dar-kitas/du.php';

include __DIR__ .'/kitas/vienas.php';
include __DIR__ .'/kitas/vienas.php';
include __DIR__ .'/dar-kitas/du.php';

$data = require __DIR__ .'/data.php';
print_r($data);

//include_once viena faila inckudina tik viena karta, nenaudojamas
//require == include (isskyrus, kad requiras ismeta fatal error jeigu nera failo)
//require_once


//serverio uzrakinimas sukuriam faila .htaccess, failo viduje order deny,allow
//deny from all