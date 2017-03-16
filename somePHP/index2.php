<?php
 $number = 1;
 $number2 = 2;

 if($number == 1 OR $number2 ==2){
   echo "lala";
 } else {
   echo "lolo";
 }

 $i=0;
 $array=array("apple", "banana");

/*while($i<20)*/
/*this version will end at the end of the array*/
 while($array[$i]){
   echo "Key: $i Value: $array[$i]";
   $i++;
 }

 ?>
