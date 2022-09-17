<?php 

/*
        - Method chaining 
        syntax :

            return $this;
            on the end of method

        

        $ob -> [ expecting object type that we have returned ]
*/







class chaining {
    public $n = 0;

    public function fun1() {
        echo "the first one \n";
        $this->n++;
        return $this;
    }
    
    
    public function fun2() {
        echo "the second one \n";
        $this->n++;
        return $this;
    }
    
    
    public function fun3() {
        echo "the third one \n";
        $this->n++;
        // echo $this->n;
        return $this;
    }


}

$ob = new chaining;
$ob ->fun1()->fun2()->fun3();