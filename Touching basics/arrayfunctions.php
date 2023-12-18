<?php
 $fruits = ['apple', 'orang', 'pear'];

 //length
 echo count($fruits); // returns 3
//search
var_dump(in_array('apple', $fruits)); // returns true
//adding to array
$fruits[] = 'grape';
array_push($fruits,'banana', 'bonono'); // adds to the end
array_unshift($fruits,'mango');
// removing from array
array_pop($fruits); // removes from the end
array_shift($fruits); // remove from start
unset($fruits[2]); // remove via indez

//split array
$chunked_array = array_chunk($fruits,2); //chunks for every 2 items
//concatinations

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1,$arr2);
print_r($arr3);
$arr4 = [... $arr1, ...$arr2];

// array combine
$a = ['green', 'red', 'yellow'];
$b = ['avocado','apple','bananer'];

$c = array_combine($a, $b); // outputs $a as keys $b as values
print_r($c);

$keys = array_keys($c);
print_r($keys);

$flip = array_flip($keys); // flips the key value pairs

$numbers = range(1 , 20); // an array of numbers 1 - 20

$newNumbers = array_map(function($number){ return 'Number  ${number} '; }, $numbers); // array mapping. still dont really get it

$lessThan10 = array_filter($numbers, function($number){ return $number <= 10;}); // filters your array by a given function parameter

echo'<br><br>'; print_r($lessThan10);

$sum = array_reduce($numbers, function($carry, $number){ return $carry + $number;});

var_dump($sum);
