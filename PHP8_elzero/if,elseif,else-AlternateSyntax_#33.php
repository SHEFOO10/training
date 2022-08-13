<?php

  /*
    Control Structure
    - If, Elseif, Else <= Alternate Syntax 
                       الكتابة البديلة ل   

  
  */


  /*
  
  //first way
      if(    ){   


      }elseif{


      }else{

      }
    
  //second way
     if(   ):

     elseif():
        
     else:
        
        
     endif;
    
  //third way 
  
  if(   ) echo "string";
  else echo "another string";


*/
  if (10 > 5) {

    echo "Good";

  } else {

    echo "Bad";

  }

  echo "<br>";

  if (10 > 10) echo "Good";
  else echo "Bad";

  echo "<br>";

  if (10 > 10)
    echo "Good";
  else
    echo "Bad";

  echo "<br>";

  if (10 > 10) echo "Good"; else echo "Bad";

?>

<?php if (10 > 5) : ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    Hello Page
  </body>
</html>

<?php endif; ?>

<?php

  if (10 > 10) :

    echo "First";

  elseif (10 > 10) :

    echo "Second";
   
   else:

    echo "Last";

  endif;

?>