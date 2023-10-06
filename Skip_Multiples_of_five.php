<!DOCTYPE html>
<html>
<body>

<?php  
for ($x = 0; $x < 50; $x++) {
  if ($x%5==0 ) {
    continue;
  }
  echo "The numbers is: $x <br>";
}
?>

</body>
</html>
