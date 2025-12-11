<?php
// 1
$num=9;
if($num > 0){
    echo $num. " Is positive";
}
elseif($num < 0){
    echo $num. " Is Negative ";
}
else{
    "the num is 0";
}

// 2
echo "<br>";
$fruit ='banana';

switch($fruit){
    case 'banana' :
        echo "its banana";
        break;
    case 'mango' :
        echo "its banana";
        break;
    case 'apple' :
        echo "its banana";
        break;
}

echo "<br>";
// 3
for($i=1 ; $i<=20 ;$i++){
    if($i %2==0){
        echo $i. "  ";
    }
}
echo "<br>";

// 4
$movies = ['mov1','mov2' , 'mov3', 'mov4' , 'mov5'];
foreach($movies as $val){
    echo $val. " ";
}
echo "<br>";

// 5
for($i = 0 ; $i<=10 ; $i++){
    if($i == 5){
        continue;
    }
    if($i == 8){
        break;
    }
    echo $i." ";
}