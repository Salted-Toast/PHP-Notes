<?php

/*----------Loops-&-Iteration---------*/

/*--------------For-Loop--------------*/

/*
** For Loop Syntax

  for (initialize; condition; increment) {
  // code to be executed
  };

*/

for ($x = 0; $x <= 5; $x++) { // ++ adds one every loop
  echo "for: $x <br>";
}

/*-------------While-Loop-------------*/

/*
** While Loop Syntax

  while (condition) {
  // code to be executed
  };

*/


$y = 1;

while ($y <= 5) {
  echo "While: $y <br>";
  $y++;
}

/*------------Do-While-Loop------------*/

/*
** Do While Loop Syntax

  do {
  // code to be executed
  } while (condition);

  Will execute once even if condition is not met as it is checked after the code

*/

$z = 1;

do {
  echo "do while: $z <br>";
  $z++;
} while ($z <= 5);

/*----------Foreach-Loop----------*/

/*
** Foreach Loop Syntax

  foreach ($array as $value) {
  // code to be executed
  };

*/

// Loop through an array

$numbers = [1, 2, 3, 4, 5];

foreach ($numbers as $a) {
  echo "foreach: $a <br>";
}

// Use the indexes within the loop

$posts = ['Post One', 'Post Two', 'Post Three'];

foreach ($posts as $index => $post) {
  echo "${index} - ${post} <br>";
}

// Use the keys within the loop for an associative array

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

// Get Keys
foreach ($person as $key => $val) {
  echo "${key} - ${val} <br>";
}
