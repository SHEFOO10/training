<?php

  /*
    Function
    - Function Advanced Training
    -- Unpacking In Arguments

    Search
    - PHP Variadic Functions
    - Splat Operator
  */

  $group_of_skills = ["HTML", "CSS", "JS", "PHP"];

  function get_data($name, $country = "Private", ...$skills) {
    echo "Hello $name Your Country Is $country <br>";
    foreach ($skills as $skill) :
      echo "-- $skill <br>";
    endforeach;
  }

  // get_data("Osama", "Egypt", ...$group_of_skills);
  get_data("Osama", "Egypt", ...["HTML", "CSS", "JS", "PHP"]);

  // i can add array to array like this 
  $arr = [1, 3, 3, 4, 9];
  $arr1 = [1, 9, 2, 6, 10, ...$arr];
  print_r($arr1);

