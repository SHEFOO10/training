<?php 



//  test some thing 

use Mockery\Expectation;

class ob {
    function sayhello() {
        echo "hello ";

    }
}
class obj {
    function sayhello() {
        echo "hello ";

    }
}
function sayhello(ob $obj) { // the variable $obj must be instance of ob
    $obj->sayhello();
    echo $obj ->name;
}
$o =new ob;
$o ->name= "shefoo";
sayhello($o);



// static function chaining 

// in chaining it expects object returned.
class nw {
    public static $va = " hello user ";
    public static function sh() {
        echo "\n ". nw::$va;
        return new nw;
    }

    public static function shefoo() {
        echo "\n we are here for you \n";
        echo static::$va;
        echo nw::$va;
    }
}

nw::sh()->shefoo();


