<?php 

// - Write a function that asks the user for a string containing multiple words. Print back to the user the same string, except with the words in backwards order. 
$string = 'This is Wangdelz';
function wordsBackWard ($str) {
    return implode(' ',array_reverse(explode(' ',$str)));
}

echo "Reverse String\n\n";
echo "For example, say I type the string :\n {$string} \n\n";
echo "Then I would see the string: \n ".wordsBackWard($string)." \n";
?>