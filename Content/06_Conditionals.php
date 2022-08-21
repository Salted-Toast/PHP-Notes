<?php
    /*--------------------If-Statements--------------------*\

    - Syntax
    if (condition) {
        // code that will be executed condition is met
    } elseif (condition){
        // code that will be executed condition is met
    } else {
        // code that will be executed if no condition is met
    };

    /*-----------------------------------------------------*/

    $time = date("H");

    if($time < 12) {
        echo 'Good Morning';
    } elseif ($time < 17) {
        echo 'Good Afternoon';
    } else {
        echo 'Good Evening';
    };
    
    $posts = ['First Post','Second Post'];

    if(!empty($posts)) {
        echo $posts[1];
    } else {
        echo 'No Posts';
    };

    // Ternary Operators to do the same as above 
    $firstPost = !empty($posts) ? $posts[0] : 'No Posts';
    $firstPost = !empty($posts) ? $posts[0] : null; // If you dont want a sec make it null
    $firstPost = $posts[0] ?? null; // Coellaessing Operator (??)
    
    echo $firstPost;
    
    // Switches Make ElseIfs look nicer
    $favecolour = ('red');

    switch($favecolour) {
        case 'red':
            echo 'Your fave colour is red';
            break;
        case 'blue';
            echo 'Your fave colour is blue';
            break;
        case 'green';
            echo 'Your fave colour is green';
            break;
        default; // Add default at the end
            echo 'Your fave colour is not green red or blue.';
    };

?>