<?php

class test {
// when you put keyword final that's mean this funciton when inheirted you cannot override it.
//   final function test1() { 
//     echo "Test >>>>";

//   }

  function test1() {
    echo "Test >>>>>";
  }
}

class child extends test {

  public function test1() {
    echo  parent::test1()  ." shefoo"; 
    // parent keyword => mean when you extend from another class that's class will be the parent of the first so you can use parent keyword as identifer for parent class.
  }
}
$obj = new child;
$obj->test1();