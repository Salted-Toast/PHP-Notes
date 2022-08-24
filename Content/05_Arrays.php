<?php
    // Simple Array
    $numbers = [1,243,3634,46445,5644234];      // Method 1
    $fruits = array('apple','orange','pear');   // Method 2

    var_dump($numbers);

    // How to call select values from array
    echo $fruits[1]; // Array start from 0

    // Associative Array - this is where you create the index yourself
    // Index values will mostly be str (little use for ints)
    $colours1 = [
        1 => 'red',
        4 => 'green',
        9 => 'blue',
    ];

    $colours2 = [
        'red' => '#fff000',
        'green' => '#gg0000',
        'blue' => '#dd0000'
    ];

    echo $colours2['red'];

    // Two Dimentional Arrays
    // indexed using method 2

    $myArray = array(
        array('Ankit', 'Ram', 'Shyam'),
        array('Unnao', 'Trichy', 'Kanpur'),
        array('Chicken', 'Strips', 'Alcohol'),
    );

    echo $myArray;

    // Associative using method 1

    $people = [
        [
            'firstName' => 'Salted',
            'lastName' => 'Toast',
            'email' => 'Salted-Toast@gmail.com',
        ],
        [
            'firstName' => 'sdlfhg',
            'lastName' => 'sdklsaj',
            'email' => 'sdlfhg@gmail.com',
        ],
        [
            'firstName' => 'dsfjh',
            'lastName' => 'dfoih',
            'email' => 'dsfjh@gmail.com',
        ],
    ];

    // Three Dimentional Arrays
    // Indexed using method 2

    $myarray = array(
        array(
            array(1, 2),
            array(3, 4),
        ),
        array(
            array(5, 6),
            array(7, 8),
        ),
        array(
            array(8, 4),
            array(3, 6),
        ),
    );

?>