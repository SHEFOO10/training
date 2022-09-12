<?php

/*

   [ $this ] =  pseudo variable [refer to object properties]



*/



class Myclass {
    // properties
    public $name;
    public $gender;


    // methods
    public function getprop() {
        echo "My name is $this->name and my gender is $this->gender";
    }

}



$nobj = new Myclass;
$nobj->name = "shefoo";
$nobj->gender= "male";
$nobj->getprop(); // this how to to call method

