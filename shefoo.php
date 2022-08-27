<?php
// that about & who can make the variable that I passed copy the content by referance of the variable I have assigned in the function. 
function copybyrefernce(&$the_variable)
{
    // assign the variable.
    $the_variable = "anything";
    // the variable after assigning will copy itself to the variable I passed in the function.
}
$orginal_variable = "the content that it will changed";
copybyrefernce($orginal_variable);
echo $orginal_variable;



/*
spl_autoload_register(function($class) {
    require $class . ".php";
});
that for auto loading the class
*/

// don't forget that diablo "shefoo" any name just don't forget that .
// give every file a namespace and make classes for everything.
// watch videos in elzero web school to learn more about php .
// if i have finished php completely : start learning laravel .
/* 1. make a perfect login and sign up page .
   2. organize everything in the website .
   3. test every thing in the website {security , screen} */
?>

