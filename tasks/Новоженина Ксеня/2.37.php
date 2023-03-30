<?php
// 1
	$day = 17;
    if($day >= 1 and $day < 11) echo 'первая декада';
    if($day >= 11 and $day < 21) echo 'вторая декада';
    if($day >= 21 and $day <= 31) echo 'третья декада';

// 2
$day = 17;
if($day >= 1 && $day < 11){
    echo 'первая декада';
} elseif ($day >= 11 and $day < 21){
    echo 'вторая декада';
} elseif($day >= 21 and $day <= 31){
    echo 'третья декада';
}

// 3
$day = 17;
if($day >= 1 && $day < 11){
    echo 'первая декада';
} elseif ($day >= 11 and $day < 21){
    echo 'вторая декада';
} elseif($day >= 21 and $day <= 31){
    echo 'третья декада';
} else{
    echo 'ебать ты дебич';
}
// 4
    $age = 42;
	if ($age < 10 || $age > 99) {
        echo "не долазишь";
      } else {
        $str = (string)$age;
        $sum = $str[0] + $str[1];
        echo "сумма цифр $age равна $sum) ";
        if ($sum <= 9) {
          echo "а еще сумма цифр однозначна";
        } else {
          echo "а еще сумма цифр двузначна";
        }
      }
?>