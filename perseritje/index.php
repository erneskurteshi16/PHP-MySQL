<?php


$num = 30;
function bmi($m,$h){
    $bmi = $m/($h*$h);
    return $bmi;
}

echo bmi(70,1.8);
$result = bmi(70,1.8);
echo $result;
$arr=[$result,1 ,2,3];



$age=15;

if($age<18){
    echo 'minor';
}else if ($age==18){
    echo 'u are 18';
}else{
    echo 'u are an adult';
}


$y =[[1,2,3],["a","b","c"]];
 echo count($y[1])."<br>";//4

for($i=0;$i<count($y);$i++){
    for($j=0;$j<count($y[$i]);$j++){
        echo "<ul>";

        echo "<li>" .$y[$i][$j]."</li>";
        echo "</ul";
    }
}


foreach ($y[0] as $sport){
    echo "</br>".$sport;
}
 
?>