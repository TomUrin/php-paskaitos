<?php
namespace Meska\Lokys;
use Old\Super\Senelis;

class Tevas extends Senelis {

    public function __construct() {
        parent::__construct();
        echo '<h3>Tevo Konstruktorius</h3>';
    }

    public function tvarka() {
        echo '<h3>Viskas sutvarkyta</h3>';
    }
}

