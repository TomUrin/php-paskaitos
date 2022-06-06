<?php

require __DIR__ . '/Stikline.php';

$s1 = new Stikline;
$s2 = new Stikline;
$s3 = new Stikline;


echo '<pre>';

print_r($s1);
print_r($s2);
print_r($s3);

echo '<br>';

Stikline::$gerimas = 'Fanta';

$s1->kas();
$s2->kas();
$s3->kas();