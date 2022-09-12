<?php 

//                                 visiablity markers 



/*                   public                      protected                   private


can be accessed      inside and outside          inside only                inside only


inhertence           work                       work                       don't work 

*/

//  test some thing 


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
