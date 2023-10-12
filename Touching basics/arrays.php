<?php
// simple array
$numbers = [1 ,22, 34, 55,72];
$strings = array('apple', 'pear', 'orange', 'mango');


//associative array
$colors = [
    1 => 'red',
    2 => 'blue',
    4=> 'green'
];

$hex = [
'red' => '#f00',
'blue' => '#0f0',
'green' => '#00f'
];

// multi dimensional array
$colorSelection = [
    [
        'red' => '#f00',
        'blue' => '#0f0',
        'green' => '#00f'
    ],
    [
        'pula' => '#f00',
        'asul' => '#0f0',
        'verde' => '#00f'
    ],
    [
        'rouge' => '#f00',
        'bleu' => '#0f0',
        'vert' => '#00f'
    ],
    [
        'rosso' => '#f00',
        'blu' => '#0f0',
        'verde' => '#00f'
    ]
];

// turn mda into json
var_dump(json_encode($colorSelection));
?>