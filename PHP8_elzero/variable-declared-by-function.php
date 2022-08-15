<?php 

//declare variable by function
function dec(){ 
    $GLOBALS['shefoo'] = "that's my name"; 
}
                                    
dec();
echo $shefoo;










?>