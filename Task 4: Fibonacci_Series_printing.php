<!DOCTYPE html>
<html>
<body>
<?php
// PHP program for Fibonacci Series
// using Recursion
  
function Fib($n)
{
    if ($n <= 1) {
        return $n;
        
    }
    else {
    	
        return Fib($n - 1) + Fib($n - 2);
        echo r;
    }
}
  
// driver code
$n = 15;

echo $n . "th Fibonacci Number: " . Fib($n);
  

?>
</body>
</html>

