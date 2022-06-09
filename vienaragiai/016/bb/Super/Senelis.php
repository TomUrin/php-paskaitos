<?php
namespace Old\Super;

class Senelis {

    public function __construct() {
        echo '<h3>Senelio Konstruktorius</h3>';
    }

    protected static $posakis = 'VA va, sakiau tau';

    public function pasaka() {
        echo '<h3>Seku seku pasaka apie Meskena</h3>';
        echo '<h3>'.self::$posakis.'</h3>';
        echo '<h3>'.static::$posakis.'</h3>';
    }
}
