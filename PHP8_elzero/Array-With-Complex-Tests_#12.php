<?php

  /*
  ============================================
  = Data Types
  = ----------
  = Array
  = -------------------
  = Array With Key
  = Array Without Keys
  = Array With One Key
  = Array Value Override
  = ------------------
  = print_r()
  ============================================
  */

  echo '<pre>';
  print_r([
    0 => "Sameh", //array with key 
    "A" => "Ahmed", //array with key 
    "B" => "Basem", //array with key 
    "Mahmoud", //array without key 
    True => "Sayed",
    "1" => "Osama",
    "Gamal", //array with indexed key
    9 => "Amera",
    "Eman",
    "Mohamed",
    False => "Asmaa",
    8 => "Haytham",
    "Samer",
    "Names" => [
      "Osama",
      "Ahmed",
      "Sayed" => [
        "1",
        "2",
        "3"
      ]
    ]
  ]);
  echo '</pre>';