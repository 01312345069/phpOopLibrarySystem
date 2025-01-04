<?php


$randomStrings = ["Apple", "banana", "Apricot", "grape", "avocado", "Mango", "almond"];


$filteredStrings = array_filter($randomStrings, function ($string) {
    return strtolower($string[0]) === 'a';
});


$uppercaseStrings = array_map('strtoupper', $filteredStrings);


print_r($uppercaseStrings);

?>