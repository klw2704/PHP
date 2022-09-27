<! DOCTYPE html>
<html?>
    <head>
        <meta charset="UTF-8">
        <title>Title of the document</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

<body>


<?php

//ARITHMETIC OPERATORS
    echo 5+5;
    echo 5%5; // modulus, how many left over from 5/5
    echo 5**5; // to the power of

// ASSIGNMENT OPERATORS
    $x = 100;
    $x += 20;
    echo $x;

// COMPARISON OPERATORS
    $x = 5;
    $y = 5;

    if ($x == $y) { // === is if x is equal to y AND the same data type
        echo "True!";
    }
    else {
        echo "False!";
    }

// INCREMENT AND DECREMENT OPERATORS
    $x = 10;
    // echo ++ $x; // ++ means add 1 if the ++ is before the variable
    echo $x ++; // this echos the variable then adds 1, it will show the original value of the variable, but the next time the variable is printed it will add 1
    echo $x;

    echo -- $x; // gives you 9

    echo $x -- ;  // this echos the variable then minuses 1, it will show the original value of the variable, but the next time the variable is printed it will add 1
    echo $x;


LOGICAL OPERATORS
   useful because you can add more conditions inside an if statement for example if you use logical operators

   two vertical lines, ||, means OR 
   && means AND
   xor means and or 

$x = 10;
$y = 20;

if ($x == $y || 1 == 1) {
    echo "True";
}

?>

    </body>
    </html> 