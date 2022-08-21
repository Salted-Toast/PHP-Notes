<?php
    
    /*--------------------------Functions--------------------------*\

    ** Function Syntax

        function functionName($arg1, $arg2, etc) {
            // code to be executed
        }

    // Local and Global Variables are included within fucnctions
    
    \*-------------------------------------------------------------*/


    // Define Function and code
    function registeruser($email = null ,$name = null) { // The '=' is setting default value (redundancy-ish)
        echo 'User registered';
    } // Semicolon not needed at end of func

    // Call function bellow where is has been defined
    registeruser('morrison@gmail.com','morrison'); // Perams must be pressent in func call as Args

    // Create an annonymous function (no name set as a var)
    // Also shortened for speed
    $subtract = fn($n1,$n2) => $n1 - $n2;
    echo $subtract(10,5);

?>