<?php
// - Create a function that will sort the given array
function bubble_Sort($arr ) {
    do {
        $swapped = false;
        $cnt = count( $arr );
        for( $i = 0, $c = $cnt - 1; $i < $c; $i++ ) {
            if( $arr[$i] > $arr[$i + 1] ) {
                list( $arr[$i + 1], $arr[$i] ) =
                        array( $arr[$i], $arr[$i + 1] );
                $swapped = true;
            }
        }
    }
    while( $swapped );
return $arr;
}

$arr = array(34,7,23,32,5,62,78,45);
echo "Sample array :[".implode(",",$arr)."]\n";
echo "Sample output :[".implode(",",bubble_Sort($arr))."]";

?>