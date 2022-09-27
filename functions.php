<! DOCTYPE html>
<html?>
    <head>
        <meta charset="UTF-8">
        <title>Title of the document</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

<body>


<?php

$dayofweek = date("w");  // date is a function already inside php

switch ($dayofweek) {
    case 1:
        echo "<p>It is Monday!</p>";
    break;
    case 2:
        echo "It is Tuesday!";
    break;
    case 3:
        echo "It is Wednesday!";
    break;
    case 4:
        echo "It is Thursday!";
    break;
    case 5:
        echo "It is Friday!";
    break;
    case 6:
        echo "It is Saturday!";
    break;
    case 0:
        echo "It is Sunday!";
    break;
}

// PRE DETERMINED FUNCTIONS - already been defined inside the php language
    echo strlen("Hi Kirsty");
    echo str_word_count("Hi Kirsty");
    echo strrev("Hi Kirsty");
    echo strpos("Hi Kirsty","Hi");
    echo str_replace("Kirsty", "Kate", "Hi Kirsty");

    $name = $_GET['person'];
    echo "Hi ".$name
    echo "Hi there, ";
    print "Kirsty";
    echo 10+5;

    $name = "Kirsty";
    echo $name;

    echo $name." is 26 years old!";

?>

    </body>
    </html> 