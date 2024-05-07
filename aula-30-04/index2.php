<?php 
 $var= array (1,2,3,5);

 echo "<p>exemplo 1</p>";
 echo "var é $var[0] <br>";
 echo "var é $var[1] <br>";
 echo "var é $var[2] <br>";
 echo "var é $var[3] <br>";

 echo "<p>exemplo 2</p>";
 $var1 = array("fabio" => 30, "eber" => 40, "w2" => 60);
 echo "$var1[fabio]<br>";
 echo "$var1[eber]<br>";
 echo "$var1[w2]<br>";

 echo "<p>exemplo 3</p>";
 $var2 = array("0" => 5,"6" => 8, "9" => 15);
 $var2[1]= 20;
 $var2[2]= 3;
 $var2[0]= 4;
 echo "$var2[0]<br>";
 echo "$var2[6]<br>";
 echo "$var2[9]<br>";
 echo "$var2[1]<br>";
 echo "$var2[2]<br>";
?>