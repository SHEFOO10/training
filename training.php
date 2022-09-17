<?php
   //use ? and ?? conditional operators php
   $s = Null;
   $s = $s ?? "sherif";
//$variable = $variable ?? "if variable is Null or not difined this will assign sherif to $s";
    #echo ($s);
    
    
    
          /* we use this if i want to assign the variable with condition 
          $variable = condition(true, false) ? this assigned if true : this assigned if condition is false;*/
          $x = false ? "ay ay ay": "ha ha ha"; 
          #echo $x;
    
    
          
          $argv; //Contains an array of all the arguments passed to the script when running from the command line.
          

      //nowdoc does escape single quote and double quote and variables
      /*         
               echo <<<'shefoo'
                  here you ''go "$shefoo
                  shefoo;
        */
              
      //heredoc does escape single quote and double quote and don't escape variables
      // heredoc can be typed like this too <<<"identifier"
      //                                        that's what i say here
      //                                        identifier;
      /*    
      $var = "that won't be escaped";
          echo <<<shefoo
          hi how are you "we can do that " $var
          shefoo;
      */
       

    
    //regex pattern
    // visit this site regexr.com that's have everything you need on regular expressions 

    // this is the syntax between the / here / you type the expression
    $pattern = "/regular expressions/";
    

     // here if i change the value of $s the value of $a will be changed , and if i change the value of $a the $s will be changed
     $s = "string";
     $a = &$s;


     // value variable 
     $a = "shefoo";
     $$a = "new shefoo"; // it's $$a equal $shefoo

     //this is the way to print $$a
         //echo " like this ${$a}";

     // make constant variable
     define("SHEFOO", "diablo");
    // echo SHEFOO;
    
    echo '<br>';

    //Important !!!!!!!!!! string will be ignored.
    // that's like convert string to intger with multiple by +
        //echo +"100";
    
    echo '<br>';
    // that's like convert string to intger with multiple by -
        //echo -"100";
        echo '<br>';
        echo '<br>';
        


/*         //important !!!!!!

        $as = "Sherif";
        $b = "hamdy";
        $c = "mohamed";

        echo "{$as} {$b} {$c}";  //shows ..... Sherif hamdy mohamed
        echo '<br>';
        echo "$as $b $c";  //shows ..... Sherif hamdy mohamed
        echo '<br>';
        echo $as.$b.$c; //shows ..... Sherifhamdymohamed
         
        // when you need to put constant or function or anything on string do concatinate  
        
        define("SHEFOO", "that's my name");
        echo "is that your name ? " . SHEFOO;     // shows .. is that your name ? that's my name

        $st = "add to me ";
        $st .= "   add !";       // "add to me    add !"
*/
    
/*
    $arr = [
        "shefoo" => [
            1,
            "name" => "sherif",
            "interests" => [
                "web development",
                "cyber security",
                "kali linux" => [
                    "version" => "Debain"
                ]
            ]
        ]
                ];

    echo '<pre>';
    print_r($arr);
    echo '<pre>';
    */
    

    //file permissions
    /*
                1 => excute
                2 => write
                3 => write and excute
                4 => read
                5 => read and excute
                6 => write and read
                7 => read and write and excute




    */


    echo "\e[1;31mMerry Christmas!\e[0m\n";



?>




