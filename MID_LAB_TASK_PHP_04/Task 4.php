<?php  
    //Find the largest number from three given numbers
    $number1 = 25;
    $number2 = 33;
    $number3 = 17;  

    if( $number1 > $number2 && $number1 > $number3 ){

      echo $number1 . " is largest";
    }
    
    else if( $number2 > $number1 && $number2 > $number3 ){

      echo $number2 . " is largest";
    }

    else {

      echo $number3 . " is largest";
    }
  ?>  