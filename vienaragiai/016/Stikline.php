<?php

class Stikline {

    public $turis;
    static public $gerimas = 'Pepsi';

    function __construct() {
        $this->turis = rand(100, 200);
    }

    function kas() {
        echo '<br>------>'.self::$gerimas;
    }
}