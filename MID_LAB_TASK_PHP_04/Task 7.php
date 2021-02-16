<?php  
  //Print the following shapes

  //* SHAPE
  $a = 3;
  for($i=1;$i<=$a;$i++)
   {
    for($j=1; $j<=$i; $j++)
      echo"*";
      echo "\n";
   }
  //123 SHAPE
  for($i=$a; $i>=1; $i--)
   {
    for($j=1; $j<=$i; $j++){
	  echo"$j ";}
    echo"\n";
     
    }
  //ABC SHAPE 
  $A=65;
  for($i=1;$i<=$a;$i++)
    {  
     
     for($j=1;$j<=$i;$j++)
     { 
      echo chr($A);
      $A=$A+1;

      }

    echo "\n"; 

   }
?>