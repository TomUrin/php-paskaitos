<?php

// metodai narsykleje:
// GET, POST, DELETE, PUT
// CRUD (Create, Get, Put, Delete)

$cats = [
    'Pukis',
    'Murkis',
    'Pilkis',
    'Rainius'
];

$out = json_encode($cats);

header('Content-Type: application/json');

echo $out;