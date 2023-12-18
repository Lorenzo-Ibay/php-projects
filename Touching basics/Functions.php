<?php
    function registerUser($email) {
        echo $email . "Registered";
    }
    // registerUser("Ligma");

    function sum($n1 = 1 , $n2 = 2)  {
        return $n1 + $n2;
    };
    // anonymous functions
    $subtract = function($n1 = 1, $n2 = 2) {
        return $n1 - $n2;
    };
    echo $subtract();
    // arrow functions exist in php
    $multiply= fn($n1 = 1, $n2 = 2) => $n1 * $n2;
?>