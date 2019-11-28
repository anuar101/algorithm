<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="post">
        <br>
        <input type="text" name="Number" id="Number">
        <button name="submit">Generate Fibonacci</button>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    
    $number = $_POST['Number']; 
    // PHP code to get the Fibonacci series 
    // Recursive function for fibonacci series. 
    // - Write a program that asks the user how many Fibonacci numbers to generate and then generates them. Take this opportunity to think about how you can use functions. Make sure to ask the user to enter the number of numbers in the sequence to generate.
    function Fibonacci($number){ 
          
        // if and else if to generate first two numbers 
        if ($number == 0) 
            return 0;     
        else if ($number == 1) 
            return 1;     
          
        // Recursive Call to get the upcoming numbers 
        else
            return (Fibonacci($number-1) +  
                    Fibonacci($number-2)); 
    } 
    echo "<br>";
    echo "Fibonacci Series: \n";
    for ($counter = 0; $counter < $number; $counter++) {   
        echo Fibonacci($counter),' '; 
    } 
}

?>
