<?php

//$names = ["Hussein","Jbory","Mr.Raad"];

//$names = array("Hussein","Jbory","Mr.Raad");


//$names = ['first' => "Hussein" , 'second' => "Jbory" , 'third' => " Mr.Raad"];

//var_dump($names);

$names  = [

[
    'name' => "hussein",
    'grade' => 5,
    'dep' => [
        "IT","CS"
    ]
    
],

[
    'name' => "Jbory",
    'grade' => 8,
    'dep' => [
        "Syper","CS"
    ]
],

[
    'name' => "Mr.Raad",
    'grade' => 10,
    'dep' => [
        "Economy","IT"
    ]
]

];

//var_dump($names);

$names[2]['dep'][0]="Engineer";


echo "<pre>";
print_r($names);
echo "</pre>";

echo $names[0]['dep'][0];


?>