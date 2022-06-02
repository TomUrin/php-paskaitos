<?php
// naudoja Regina
require __DIR__ . '/Bebras.php';

$bebras1 = new Bebras('Jonas', []);
$bebras2 = new Bebras('Janina', [1,2,3]);
$bebras3 = $bebras1;
$bebras4 = clone $bebras1;

echo '<pre>';
// var_dump($bebras1);
// var_dump($bebras2);
// var_dump($bebras3);
// var_dump($bebras4);

//  echo $bebras1->tail;
//  echo '<br>';
//  $bebras1->tail = 'Very long';
//echo '<br>';
//echo $bebras1->age;
echo '<br>';
echo $bebras1->name = 'John';

//$bebras1->changeAge(36);

// $bebras1->whatIsYourAge();