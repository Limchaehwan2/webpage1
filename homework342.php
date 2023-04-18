<!DOCTYPE html>
<html>
<body>

<?php
$n = 20;
for($x = 0; $x < $n; $x++) {
   $data[$x]= rand(0,100);
   echo "$data[$x]";
}
echo"<br>";

for($y=1; $y<$n; $y++) {
    for($x=0; $x<$n-$y; $x++){
     if($data[$x]>$data[$x+1]) {
    $tmp=$data[$x];
    $data[$x]=$data[$x+1];
    $data[$x+1]=$tmp;
    }
   }
   for($x=0; $x<$n; $x++) {
      echo "$data[$x]";
   }
   echo "<br>";
}

?>
 

</body>
</html>