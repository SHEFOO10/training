<?php
/*

    -You cannot Extend Or Implements.
    - You Cannot Instantiate.
    - Its Supporting Class Not Replacing It.
    - Can Have Methods.
    - Have Priority Over Class.





*/




trait feature1 {
    public function feature() {
        echo "this is feature number 1";

    }
}

trait feature2 {
    public function feature() {
        echo "this is feature number 2";
    }
}
class test {
    use feature1, feature2 {

        // [ Trait Name ] [ :: ] [ Method Name ] [ keyword insteadof ] [ Other Method Name ]
        feature1::feature insteadof feature2;


        // [ Trait Name ] [ :: ] [ Method Name ] [ Keyword as ] [ New Name ]
        feature2::feature as nfeature;
    }
}

$ob = new test;
$ob->feature();
echo "\n";
$ob->nfeature();







trait sh {
    abstract function test () ;
}

class tst { // class don't support anonymous or arrow functions
    use sh;
    // you cannot use arrow function
    // public $shefoo = fn() => "shefoo";

    /*
     You cannot use anonymous function 
      public $shefoo = function () {
    } 
    */
    public function test() {
        echo " shefoo is here ";
    }
}

$bs = new tst;
$bs ->test();








// $ob = new class("shefoo") { //anonymous class
//     public function __construct($u)
//     {
//         // anonymous class can have __construct function with arguments
//     }
//     public function sayhello() {
//         echo " hello world ";

//     }
// };
// var_dump($ob);












?>