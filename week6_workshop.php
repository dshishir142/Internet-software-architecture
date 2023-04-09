<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


//1
for ($i = 5; $i <= 15; $i++){
    echo $i."<br>";
}


//2
$var = "Hello World!<br>";
print $var;


//3
$marks = 80;
if ($marks >= 70 and $marks <= 100){
    print "A<br>";
}elseif($marks >= 60 and $marks < 70){
    echo "B<br>";
}elseif($marks >= 50 and $marks < 60){
    echo "c<br>";
}elseif($marks >= 40 and $marks < 50){
    echo "D<br>";
}else{
    echo "Fail<br>";
}


//4
$n = 5;
$final = 1;
for ($i = 1; $i <= $n; $i++){
    $final *= $i;
}
echo $final."<br>";



//5
for ($i = 0; $i < 8; $i++){
    for($j = 0; $j < $i; $j++){
        echo "*";
    }
    echo "<br>";
}



//6
$list = array( "Italy"=>"Rome",
"Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels",
"Denmark"=>"Copenhagen",
"Finland"=>"Helsinki",
"France" => "Paris",
"Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana",
"Germany" => "Berlin",
"Greece" => "Athens",
"Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon",
"Spain"=>"Madrid",
"Sweden"=>"Stockholm",
"United Kingdom"=>"London",
"Cyprus"=>"Nicosia",
"Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague",
"Estonia"=>"Tallin",
"Hungary"=>"Budapest",
"Latvia"=>"Riga",
"Malta"=>"Valetta",
"Austria" => "Vienna",
"Poland"=>"Warsaw") ;

foreach($list as $country => $capital){
    echo "$capital is the capital of $country <br>";
}




//7
$word = "NaN";
$word_rev = strrev($word);
if ($word == $word_rev){
    echo " $word is palindrome string <br>";
}else{
    echo " $word is not a palindrome string";
}



//8
$a = 5;
$b = 10;

$temp = $a;
$a = $b;
$b = $temp;

echo "a = $a <br>";
echo "b = $b <br>";




//9
$a9 = 5;
for ($i = 1; $i <=10; $i++){
    echo $a9*$i."<br>";
}



//10 
$val = 15;
$tem = $val;
$sum = 0;
$digits = strlen($val);
while ($tem > 0){
    $digi = $tem % 10;
    $sum += pow($digi , $digits);
    $tem = floor($tem / 10);
}
if ($val == $sum){
    echo "$val is armstrong number <br>";
}else{
    echo "$val is not armstrong number <br>";
}
?>



</body>
</html>