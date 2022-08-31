<?php
function &collector() {
    $collection = array("shefoo"); // $collection = array(); this specificed collection variable as array 
  // static to make collection hold data
  return $collection;
}
$collection = &collector();
$collection[] = 'foo'; // this will modified return of collector function and add to it 'foo'

// array_push(collector(), "shefoo");  // this will modified return of collector function and add to it 'shefoo'
// array_push need me to put keyword static on collection
print_r($collection); // array( [0] => 'shefoo', [1] => 'foo')




/*              returning by reference                                                   

if i removed & from function this will raise error say only variable can be passed by reference


    we need this syntax 
        
        function &name() {
                $var;
                return $var
        }

        $ref = &name();
        $ref = "string";
        echo name(); // Result: string


        
*/


?>
<!--  another example for returning by reference -->
<?php
        class foo {
            public $value = 42;

            public function &getValue() {
                return $this->value;
            }
        }

        $obj = new foo;
        $myValue = &$obj->getValue(); // $myValue is a reference to $obj->value, which is 42.
        $obj->value = 2;
        echo $myValue;                // prints the new value of $obj->value, i.e. 2.
?>


?>

