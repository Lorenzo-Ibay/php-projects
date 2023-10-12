<?php
/* php data types */
/*
string
integer
float
bool
array
object - created from a class
NULL
resource
*/

$name = "Ligma"; //string 
$age = 50; // Int
$has_kids = true; //Bool 
$cash_on_hand = 420.69; // float

echo $name .'is'.$age.'years old';
//concat method is recommended
echo "$name is  $age years old";
// can also use ${var} but is deprecated

//define(STRINGNAME , 'value')