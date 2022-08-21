<?php
    /*-----------------------Array-Functions-----------------------*\

    \*-------------------------------------------------------------*/

    $fruits = ['apple','orange','pear'];

    // Get length of array
    echo count($fruits);

    // Check if specific value is in array
    var_dump(in_array('apple',$fruits));

    // Add to array
    $fruits[] = 'grape'; // Adds to end of array                                    // Method 1
    array_push($fruits, 'blueberry','strawberry'); // Adds to the end of array      // Method 2
    array_unshift($fruits, 'mango'); // Adds to the start of array                  // Method 3

    print_r($fruits);

    // Remove from array
    array_pop($fruits); // Removes from the end of array
    array_shift($fruits); // Removes from the beggining
    // unset($fruits[0]); // Removes Specific value and index value

    // Split array into chunks
    $chunkedArray = array_chunk($fruits,2);
    print_r($chunkedArray);

    // Merge array
    $arr1 = [1,2,3];
    $arr2 = [4,5,6];
    
    $arr3 = array_merge($arr1,$arr2);  // Method 1
    $arr4 =  [...$arr1,...$arr2];      // Method 2 

    print_r($arr3);
    print_r($arr4);

    // Creates keyed array
    $a = ['green','red','yellow'];
    $b = ['avocado','apple','bannana'];

    $c = array_combine($a,$b);
    print_r($c); // Prints entire array & keys

    $keys = array_keys($c);
    print_r($keys);

    $flipped = array_flip($c);
    print_r($flipped); // Flips keys and values in the array


    // How to use range to print array
    $numbers = range(1,30);
    $newNumbers = range(1,20);

    $newNumbers = array_map(function($number) {
        return "Number ${number}";
    }, $newNumbers);

    // gets only 1-10 of numbers array
    $lessThan10 = array_filter($numbers, fn($numbers) => $number <= 10);
    print_r($lessThan10);

    // Prints the sum of all of the values in number
    $sum = array_reduce($numbers, fn($carry,$number) => $carry + $number);
    var_dump($sum);

?>