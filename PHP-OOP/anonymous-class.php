<?php



$ob = new class("shefoo") { //anonymous class
    public function __construct($u)
    {
        // anonymous class can have __construct function with arguments
    }
    public function sayhello() {
        echo " hello world ";

    }
};
var_dump($ob);














?>