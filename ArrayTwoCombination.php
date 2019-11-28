<?php
// - php program to check if given  
// - array has 2 elements whose sum  
// - is equal to 8 
  
// - Create a function that will check an Array of numbers for all combinations of 2 numbers and tell if any combination is equal to 8.
// - Function to check if array has  
// - 2 elements whose sum is equal 8
function hasArrayTwoCombination($arr, $arr_size, $sum) { 
    $l; $r; 
  
    // - Sort the elements
    sort($arr); 
  
    // - Now look for the two candidates  in the sorted array
    $l = 0; 
    $r = $arr_size - 1;  
    while ($l < $r) { 
        if($arr[$l] + $arr[$r] == $sum) 
            return 1;  
        else if($arr[$l] + $arr[$r] < $sum) 
            $l++; 
        else // arr[i] + arr[j] > sum 
            $r--; 
    }  
    return 0; 
} 
  
//$arr = array (1,2,3,9); 
$arr = array (7,2,4,6,7); 
//$arr = array (7,2,4,6,7); 
$n = 8; 
$arr_size = sizeof($arr); 

// - call function  hasArrayTwoCombination
if(hasArrayTwoCombination ($arr, $arr_size, $n)) 
    echo "[".implode("','",$arr)."]Sum = 8 Yes'<br>";
else
    echo "[".implode("','",$arr)."]Sum = 8 No'<br>";
?>