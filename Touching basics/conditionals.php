<?php 
/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/
/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}elseif(condition{
    code to execute if alternative condition is true
})
else{
    code to execute if condition is false
}
*/

$age = 20;

if ($age >= 18) {
  echo 'You are old enough to vote!';
} else {
  echo 'Sorry, you are too young to vote.';
}

// Dates
// $today = date("F j, Y, g:i a");

$t = date('H');

if ($t < 12) {
  echo 'Have a good morning!';
} elseif ($t < 17) {
  echo 'Have a good afternoon!';
} else {
  echo 'Have a good evening!';
}

// Check if an array is empty
// The isset() function will generate a warning or e-notice when the variable does not exists. The empty() function will not generate any warning or e-notice when the variable does not exists.

$posts = [];

if (!empty($posts[0])) {
  echo $posts[0];
} else {
  echo 'There are no posts';
}
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/
// Echo based on a condition (Same as above)
echo !empty($posts[0]) ? $posts[0] : 'There are no posts';

$favcolor='red';

switch($favcolor){
  case 'red':
    echo "Faborito es red";
    break;
  case 'blue':
    echo "faborito es blue ";
    break;
  case 'green':
    echo 'faborito es green';
    break;
  default:
  echo 'Your favorite color is not red, blue, nor green!';
}