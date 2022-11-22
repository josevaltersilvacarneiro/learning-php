<?php

// Dynamically typed

$age = 23;
$salary = 1212.65;
$division = 10 / 3; # Get decimal
$hello = 'Hello, world!';
$yes = true; // Boolean

echo gettype($age) . "\n"; // integer
echo gettype($salary) . "\n"; // double => decimal or float
echo gettype($division) . "\n"; // Double too
echo gettype($hello) . "\n"; // string
echo gettype($yes) . "\n"; // Boolean
