<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="post">
        <br>
        <input type="text" name="Number" id="Number">
        <button name="submit">Generate Factorial</button>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    
    $number = $_POST['Number']; 
    // PHP code to get the Factorial 
    function Factorial($number){ 
        return ($number <= 1) ? 1 : $number * Factorial($number - 1);
    } 
      
    // Driver Code 
    $fact = Factorial($number); 
    echo "Factorial = $fact";
}

?>
