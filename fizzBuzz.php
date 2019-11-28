<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="post">
        <br>
        <input type="text" name="Number" id="Number">
        <button name="submit">Generate Fizz Buzz</button>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    
    $number = $_POST['Number']; 
    function fizzBuzz($number) {
    // Write your code here
          // - multiple value either 3 and 5 
        switch ($number) {
            case (($number % 3 == 0) && ($number % 5 == 0)):
                echo "FizzBuzz";
                break;
            case ($number % 3 == 0):
                echo "Fizz";
                break;
            case ($number % 5 == 0):
                echo "Buzz";
                break;
            
            default:
                echo $number;
                break;
        }
    }
  
  echo fizzBuzz($number);
}

?>
