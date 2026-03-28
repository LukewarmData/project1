<?php

// if statement


$emailSent = true;

if ($emailSent) {
    echo " your email was sent";

}
else{
    echo " Email sent Failed";
}

echo "<br>";
echo "<br>";
echo "<br>";

$name = "Ahmed";
$age = 22;

if ($name=="Ahmed" && $age >= 18){
        //echo "nigga";

}
else{
   // echo "this man not nigga";
}

// ternary operator

echo $emailSent ? "success" : "failed" ;

echo "<br>";
echo "<br>";
echo "<br>";

$color = "green";

switch($color){
    case 'red':
        echo "red";
        break;
    
    case 'blue':
        echo "blue";
        break;
    
    default:
        echo "Unkown";
        break;
}

?>