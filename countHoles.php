<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="post">
        <br>
        <input type="text" name="Number" id="Number">
        <button name="submit">Generate Count Holes</button>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    
    $number = $_POST['Number']; 
   // - this will be global array for hole values 
    $hole = array(1, 0, 0, 0, 1, 0, 1, 0, 2, 1); 
      
    // - of holes in number 
    function countHoles($number) { 
        global $hole; 
        $holes = 0; 
      
        while ($number > 0) { 
      
            // - last digit in num 
            $d = $number % 10; 
      
            // - update holes 
            $holes += $hole[$d]; 
      
            // - remove last digit 
            $number =  (int)($number / 10); 
        } 
      
        // - return the count of holes 
        // - in the original num 
        return $holes; 
    } 
      
    // - sample Input 
    //$number = 1288; 
    echo countHoles($number); 
}

?>
