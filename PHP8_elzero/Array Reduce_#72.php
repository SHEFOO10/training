<?php

  /*
    Array Functions

    - array_reduce(Array[Required], Callback Function[Required], Initial_Value[Optional])
    --- Reduce The Array To A Single Value
    --- Carry => The Value Of The Previous Iteration || Initial Value
    --- Item => The Value Of The Current Iteration

    
    function add($carry, $item) {
        echo "$carry<br>";
        echo "$item<br>";
        echo $carry + $item . "<br>";
        echo "###########<br>";
        return $carry + $item;
    }
    
    $nums = [10, 20, 50, 100, 10];
    
    echo array_reduce($nums, "add", 100);
    */

    $nums = [10, 20, 50, 100, 100000, 10, 20, 200, 10, 400, 4999, 4927];
    
    // this give me the biggest number on the array
    function add($carry, $item) {
        if($carry < $item):
            return $item;
        else:
            return $carry;
        endif;
       
    }

    echo array_reduce($nums, 'add');
    // this give me the biggest number on the array
    sort($nums);
    echo $nums[count($nums) - 1];


    // array_reduce carry can set by return
  ?>