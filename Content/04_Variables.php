<?php
    /*------------PHP-Data-Types------------*\
    
    - String    Chars surrounded by quotes ( "" / '' )
    - Integer   Whole Nums
    - Float     Decimal Numbers
    - Boolean   True/False
    - Array     Can hold more than one value
    - NULL      Empty Var
    - Object    A class
    - Resource  Special var that holds a resource
    
    \*--------------------------------------*/

    /*------------Variable-Rules------------*\

    - Variables must be prefixed with $
    - Variables must start with a letter or the underscore character
    - variables can't start with a number
    - Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    - Variables are case-sensitive ($name and $NAME are two different variables)
    
    \*--------------------------------------*/

    $name = "Salted-Toast"; // Str
    $age = 17; // Int
    $hasKids = false; // Bool outputs as 1/0
    $cashOnHand = 35.50; // Float

    // Concatenation
    echo $name . ' is ' . $age . ' years old ';
    echo "{$name} is $age years old"; // Curly braces work on/off

    // Constant Variables - Use CAPS for Const Var name
    define('HOST','localhost');
    define('DB_NAME','dev_db');

    echo HOST, DB_NAME;


?>