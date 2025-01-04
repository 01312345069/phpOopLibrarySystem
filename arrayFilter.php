<?php

// Given array of random strings
$randomStrings = ["Apple", "banana", "Apricot", "grape", "avocado", "Mango", "almond"];

// Filter strings that start with 'A' or 'a' using array_filter
$filteredStrings = array_filter($randomStrings, function ($string) {
    return strtolower($string[0]) === 'a';
});

// Convert all strings to uppercase using array_map
$uppercaseStrings = array_map('strtoupper', $filteredStrings);

// Display the resulting array
print_r($uppercaseStrings);

?>