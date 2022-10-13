<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

// Simple array of numbers
$numbers = [1, 2, 3, 4, 5];

// Simple array of strings
$colors = ['red', 'blue', 'green'];

// Using the array function to create an array of numbers
$numbers = [1, 2, 3, 4, 5];

// Outputting values from an array
echo $numbers[0];
echo $numbers[3] + $numbers[4];

// We can use print_r or var_dump to see the contents of an array
var_dump($numbers);

/* ------ Associative Arrays ----- */

/*
  Associative arrays allow us to use named keys to identify values.
*/

$colors = [
  1 => 'red',
  2 => 'green',
  3 => 'blue',
];

// echo $colors[1];

// Strings as keys
$hex = [
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '#00f',
];

echo $hex['red'];
var_dump($hex);

/* ---- Multi-dimensional arrays ---- */

/*
  Multi-dimansional arrays are often used to store data in a table format.
*/

// Single person
$person1 = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

// Array of people
$people = [
  $person1, //   [...$person1]
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com',
  ],
  [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'jane@gmail.com',
  ],
];

var_dump($people);

// Accessing values in a multi-dimensional array
echo $people[0]['first_name'];
echo $people[2]['email'];

// Encode to JSON
var_dump(json_encode($people));

// Decode from JSON
$jsonobj = '{"first_name":"Brad","last_name": "Traversy","email":"brad@gmail.com"}';
var_dump(json_decode($jsonobj));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> $numbers[0]=== <?= $numbers[0];?></h2>
    <h2> $numbers[3] + $numbers[4];=== <?= $numbers[3] + $numbers[4]; ?></h2>
    <h2> var_dump($numbers); <?= var_dump($numbers); ?></h2>
    <h2>  $hex['red']=== <?=  $hex['red']; ?></h2>
    <h2> var_dump($hex)=== <?= var_dump($hex); ?></h2>
    <h2> var_dump($people)=== <?= var_dump($people); ?></h2>
    <h2> $people[0]['first_name']; <?= $people[0]['first_name']; ?></h2>
    <h2> $people[2]['email']; <?= $people[2]['email']; ?></h2>
    <h2> var_dump(json_encode($people))=== <?= var_dump(json_encode($people)); ?></h2>
    <h2> var_dump(json_decode($jsonobj))=== <?= var_dump(json_decode($jsonobj)); ?></h2>
</body>
</html>