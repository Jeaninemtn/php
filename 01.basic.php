<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>basic php: echo amd print</title>
</head>

<body>
<?php
    echo 123 + 456;

    echo '<br>';

    echo "<h2>PHP is Fun!</h2>";

    echo '<br>';

    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";

    
    print 100+23;




// https://www.w3schools.com/php/php_echo_print.asp

// echo跟print都可以用來印出output

// The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

?>
</body>

</html>