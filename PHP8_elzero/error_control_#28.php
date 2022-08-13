<?php
   
  /*
    Operators
    - Used To Perform Operations On Values.

    Error Control Operator
    - Control The Errors

    @
    - Variable
    - File
    - Include
  */

  // Variable
  $a = 10;
  $b = @$a or die("Variable Not Found");

  
  #echo $name; // this will give error undefind variable so we put @ to it 
  echo @$name; // this won't give error

  echo "Test $b";
  echo '<br>';

  // File
  $f = @file("osama.txt") or die("File Not Found");
  echo '<pre>';
  print_r($f);
  echo '</pre>';
  echo '<br>';

  // Include
  (@include("osama_elzero.php")) or die("Include File Not Found");