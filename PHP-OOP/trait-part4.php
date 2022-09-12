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



























?>