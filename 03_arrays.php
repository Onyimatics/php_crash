<?php

/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

// Simple Array
$numbers = [1,44,55,22];
$fruits = array('apple', 'orange', 'pear');

// var_dump($numbers);
// echo($fruits[0]);

// Associate Array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

// echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex['blue'];

$person = [
    'first_name' => 'Onyii',
    'last_name' => 'Traversy',
    'email'  => 'onyii@gmail.com'];

    // echo $person['email'];

    $people = [
        [
            'first_name' => 'Onyii',
            'last_name' => 'Traversy',
            'email'  => 'onyii@gmail.com'
        ],
        [
            'first_name' => 'Judith',
            'last_name' => 'Jay',
            'email'  => 'jay@gmail.com'
        ],
        [
            'first_name' => 'Femi',
            'last_name' => 'Femo',
            'email'  => 'femi@gmail.com'
        ]
        ];

        // echo $people[1]['email'];
        var_dump(json_encode($people));