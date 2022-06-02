<?php
// klases daro Antanas

// klaseje gali buti vidiniai kintamieji
// public pasiekiamas visiems
// protected pasiekiamas seimai
// private pasiekiamas tik man (tiktai klases viduje galima redaguoti reiksme)
class Bebras {

    public $tail = 'Long';
    private $age = 23;
    private $name, $childrens;


    // magic construct pasileidzia pavartojus zodi new
    public function __construct(string $n, array $c) {
        echo '<br> magic construct <br>';
        $this->whatIsYourAge();
        $this->age = rand(10, 200);
        $this->whatIsYourAge();
        $this->name = $n;
        $this->childrens = $c;
    }
    // desctruct
    public function __destruct() {
        echo '<br> magic visi mire <br>';
    }

    // getter(funkcija kuri ka nors duoda)
    public function whatIsYourAge() { 
       // echo '<br>'.(++$this->age).'<br>'; 
    }

    // setter(neleidzia deti bet ko)
    public function changeAge(int $age) {
        if ($age > 25) {
            return;
        }
        $this->age = $age;
    }
    //get
    public function __get($what) {
        if(in_array($what, ['age', 'name'])) {
            // echo '<br>magic Get '.$what.'<br>';
        // return 'Nieko nera namie';
        return $this->$what;
        }
    }

    //set

    public function __set($where, $what) {
        echo '<br>magic Get '.$where.''.$what.'<br>';
    }

}