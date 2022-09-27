<! DOCTYPE html>
<html?>
    <head>
        <meta charset="UTF-8">
        <title>Title of the document</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

<body>


<?php

//VARIOUS CONDITIONAL STATEMENTS
    $x = 2;

    if ($x == 1) {
        echo "Something something something!";
    }  elseif ($x == 2) {
        echo "x equals 2";
    } else {
        echo "This isn't true";
    }

// SWITCH STATEMENTS 
        $x = "number";

        // with switch you write all the different possible answers inside the code brackets itself 
        switch ($x) {
            case 1: 
                echo "The answer is 1";
            break; // ending case number 1

            case 2: 
                echo "The answer is 2";
            break;

            case 3: 
                echo "The answer is 3";
            break;

            case 4: 
                echo "The answer is 4";
            break;

            default: 
                echo "There is no answer"; // equivalent to else, dont need a break after
        }

?>

    </body>
    </html> 