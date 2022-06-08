<?php

require __DIR__ . '/Stikline.php';
require __DIR__ . '/Cart.php';


$c1 = Cart::create();
$c2 = Cart::create();

$c3 = unserialize(serialize($c1));
echo '<br>';

echo json_encode($c1);
echo '<br>';

$c2 = clone($c1);

echo '<pre>';

var_dump($c1);
var_dump($c2);
var_dump($c3);

die;

$s1 = new Stikline;
$s2 = new Stikline;
$s3 = new Stikline;


echo '<pre>';

print_r($s1);
print_r($s2);
print_r($s3);

echo '<br>';

Stikline::$gerimas = 'Fanta';

Stikline::valio(); // statinio metodo paleidimas
$s2->kas();
$s3->kas();