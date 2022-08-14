<?php

  /*
    Control Structure
    - Including Files

    Include
    Require
  */

  // require if file doesn't exist raise fatal error 
  // include if file doesn't exist raise warning


  include_once("test.php"); // $a = 10;

  echo $a . '<br>';

  $a = 20;

  include_once("test.php"); // this won't be included because it's already included 

  // require have the same idea "require_once" if it's required once it won't be required again 

  echo $a . '<br>';

  echo "Continue";