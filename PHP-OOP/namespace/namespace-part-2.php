 <?php 
/*

 namespace => it's like the world of file 

 namespace [ example ]


 $ob = new example\[Name Of The Class]

 note : the file can contain as many as you want of namespaces.

 another one : like you know you can use the class on global without make namespace for it.

*/

require "Sony.php";
require "LG.php";


$Sony = new shefoo\CreatePhone; // This class you need first to specify the [ world, room ] of class 
 
$Sony->sayHello();



class glbl {
    public function test() {
        echo " This is for the test and this class globally use";
    }
}






  















?>