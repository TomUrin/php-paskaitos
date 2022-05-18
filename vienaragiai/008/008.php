<?php

echo '<pre>';

//jeigu apskliausti '/b(\d+/)' duos du rezulatus, jeigu uzdedam klaustuka, tada paima maziausia kieki '/(.)(\d+?/)'
// '/(.)(\d(\d\d)\d)', kiek skliausteliu, tiek bus atsakymu masyve
// (.), bet koks simbolis
// '/\.(.*)\./', surasti taskus, * reiskia bet koks simbolis, bet kiek kartu pakartotas
/*
echo preg_replace_callback(
    '/\.(.*)\./',
    'ieskok',
    'xvbcvkb.' . rand(1000, 9999) . '.hsdvnjiruvdv');

echo '<br>';

    function ieskok($m) {
        print_r($m);
        return '-'.$m[0].'-';
    }
*/

//surasti trys paskutinius skaicius

/*$m = [5, 5, 7, 5, 9, 8, 7, 7, 9];

$m3 = array_slice($m, -3, 3);

print_r($m3);
*/


//rand nuo 100iki 999. Parašyti 3 funkcijas, sudėti jas į masyvą, tą masyvą praforyčinti ir kaip argumentą panaudoti sugeneruota rand. Funk daugina ir spausdina gautą argumentą 3, 5, 7 atitinkamai DONE!

$skaicius = rand(100, 999);
$masyvas = [];

array_push($masyvas,
            fn($x) => $x * 3,
            fn($x) => $x * 5,
            fn($x) => $x * 7,
);

foreach($masyvas as &$funkc) {
    //echo $funkc($skaicius).'<br>';
    $funkc = $funkc($skaicius);
}

print_r($masyvas);

$pirma = fn($v) => $v * 3;
$antra = fn($v) => $v * 6;

$funkcijuMasyvas = [$pirma, $antra];

// funkcija generatorius

function gen_one_to_three() {
    for($i = 0; $i <= 10; $i++) {
        yield $i => rand(1000, 9999);
    }
}

foreach(gen_one_to_three() as $key => $value) {
        echo "$key => $value <br>";
}

// current rodo dabartine pozicija
// next sekancia pozicija
// prev praeita pozicija
// 'end' i pabaiga
// 'reset' sugrazina i pradzia

$transport = ['foot', 'bike', 'car', 'plane'];

echo '<br>';
echo current($transport);
echo '<br>';
echo next($transport);
echo '<br>';
echo prev($transport);
echo '<br>';
echo end($transport);
echo '<br>';
echo reset($transport);

// pereiti i kita folderi per terminala, irasome 'cd "folder-name"'
// nusileisti zemyn cd ..