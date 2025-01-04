<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($str)
{
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    return strlen(preg_replace('/[^' . implode('', $vowels) . ']/', '', $str));
}

foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = strrev($string);

    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>