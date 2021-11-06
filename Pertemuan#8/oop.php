<?php

    class Animal {

        public $name;
        public $legs = 4;
        public $cold_blooded = "no";

        function __construct($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }

        function get_legs() {
            return $this->legs;
        }
        
        function get_cold_blooded() {
            return $this->cold_blooded;
        }
    }

    class Frog extends Animal {

        public $jump = "Hop Hop!";

        function get_jump() {
            return $this->jump;
        }
        
    }

    class Ape extends Animal {

        public $yell = "Auooo!";
        public $legs = 2;

        function get_yell() {
            return $this->yell;
        }
        
    }
    

    $sheep = new Animal("Shaun");

    echo "Name : {$sheep->get_name()} <br>";
    echo "Legs : {$sheep->get_legs()} <br>";
    echo "Cold Blooded : {$sheep->get_cold_blooded()} <br><br>";

    $kodok = new Frog("Buduk");

    echo "Name : {$kodok->get_name()} <br>";
    echo "Legs : {$kodok->get_legs()} <br>";
    echo "Cold Blooded : {$kodok->get_cold_blooded()} <br>";
    echo "Jump : {$kodok->get_jump()} <br><br>";

    $sungokong = new Ape("Kera Sakti");

    echo "Name : {$sungokong->get_name()} <br>";
    echo "Legs : {$sungokong->get_legs()} <br>";
    echo "Cold Blooded :  {$sungokong->get_cold_blooded()} <br>";
    echo "Yell :   {$sungokong->get_yell()}";

?>