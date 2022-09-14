<?php


interface struct {  // interface have only functions 
    public function set (); // must be public 
}

class in implements struct {// you can use one or more of interfaces
    public function set(){
        // code here.
    }
}

function simpleone() {
    echo "just for test something";

}