 <?php

//ddition

$number = 0;

$number++;
$number++;

// echo $number;



// subtraction

$bill = 100 ;
$payment = 76 ;

$balance = $bill - $payment ;

//echo $balance;

// precentage + formating

$fullMark = 500;
$myMark = 407;

$precent = ($myMark / $fullMark) * 100 ;

$precent = number_format($precent , 3);

//echo $precent ;

// reminder % moudlo

$rows=20;

for ($row = 0 ; $row < $rows ; $row++){

 if ($row % 2 ==0 ){
       // echo $row . " This is even <br>";

 }
 else{
        //echo $row . " This is odd <br>";

 }



}

// power **

$x=5;

echo $x ** 3;

?>