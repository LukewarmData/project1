<?php

function fullName ($first ,  $last){
    return $first ." ". $last;

}

function sum ($num1 , $num2){

if(is_numeric($num1) && is_numeric($num2)){
    return $num1 + $num2 ;
}
else{
    echo "what was that??!";
}

}

function arr_sum (array $numbers){

    $total = 0;
    foreach($numbers as $num){
        $total = $total + $num;
        
    }

    return $total;


}

echo arr_sum([1,2,3,4,5]);

?>