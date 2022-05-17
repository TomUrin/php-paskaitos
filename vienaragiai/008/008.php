<?php

echo '<pre>';

//jeigu apskliausti '/b(\d+/)' duos du rezulatus, jeigu uzdedam klaustuka, tada paima maziausia kieki '/(.)(\d+?/)'
// '/(.)(\d(\d\d)\d)', kiek skliausteliu, tiek bus atsakymu masyve
// (.), bet koks simbolis
echo preg_replace_callback(
    '/\d+/',
    'ieskok',
    'xvbcvkb' . rand(1000, 9999) . 'hsdvnjiruvdv');

echo '<br>';

    function ieskok($m) {
        print_r($m);
        return '-'.$m[0].'-';
    }