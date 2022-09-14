<?php


    class stat {
        public $va = "public";
        static $v = "static"; // static variable saves the last data it has got from the last call
        static function s() {
            echo stat::$v;
        }
    // A static function is a member function of a class that can be called even when an object of the class is not initialized
    }

    stat::s();