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
     
          ?>
