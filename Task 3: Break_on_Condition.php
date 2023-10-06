<!DOCTYPE html>
<html>
<body>

<?php
	$x = 0;
	$f1 = 0;
    	$f2 = 1;
   
    echo $f1;
    echo '<br/>';
    echo $f2 ;
    echo '<br/>';
  while($x < 10) {
      	$f3 = $f1 + $f2;
          $f1 = $f2;
          $f2 = $f3;
    if ($f3 >100) {
      break;
    }
    echo  $f3. "<br> ";
    $x++;
  }
?>
</body>
</html>
