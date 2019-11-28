<?php

// - Create a function that will get the First Recurring Character feeded by string
function findRepeatFirstN2($str)  {  
    // - this is O(N^2) method  
    $p = -1;
    $strlen = strlen($str);
    for ($i = 0; $i < $strlen; $i++) {  
        
        for ($j = ($i + 1); $j < $strlen; $j++) {  
            
            if ($str[$i] == $str[$j]) {  
                $p = $i;  
                break;  
            }  
        } 

        if ($p != -1)  
            break;  
    }  
  
    return $p;  
}  
  
//$str = "AABCA";  
$str = "CCBADBA";  
//$str = "ACABDBA";  
//$str = "ACBAD";  
$pos = findRepeatFirstN2($str);  
  
if ($pos == -1)  
    echo ("null");  
else
    echo ($str[$pos]);  

?>