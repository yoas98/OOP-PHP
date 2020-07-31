<?php 

class Animal {
    public $name,
           $legs = 2,
           $cold_blooded = "false";

    public function __construct( $name) {
        $this->name = $name;
    }
   
}


?>