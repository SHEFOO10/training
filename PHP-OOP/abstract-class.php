<?php


/*
  Class Abstraction
-Cannot Be Instantiated [ Cannot Create Object From ]
-Made For Other Classes To Inherit Prop & Methods From
-Can Have Methods & Properties
-Can Have Abtracted Method And Non Abstracted Methods
*/

abstract class shefoo {
    function sayhello () {
        echo " Hello ";
    
    }
    abstract protected function bye();
}

class child extends shefoo {
    public function bye() {
        echo "bye ";
    
    }
    public function callan() {
        child::bye();
    }

}
$ob = new child;
$ob->callan();
$ob->bye();