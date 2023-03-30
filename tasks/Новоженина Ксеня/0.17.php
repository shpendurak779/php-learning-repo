<?php
// 1
	$test = 'abcde';
    echo $test[0];
    echo $test[2];
    echo $test[4];

// 2
    $test = 'abcde';
    for ($i=4; $i >= 0; $i--){
        echo $test[$i];
    }

// 3
    $str = 'abcde';
    $num = 3;
    echo $str[$num];

// 4
    $str = 'huy';
    echo $str[strlen($str) - 1];

// 5
    $str = 'zalupa';
	echo $str[strlen($str) - 2];

// 6
    $str = 'Antidisestablishmentarianism';
    echo $str[strlen($str) - 3];

// 7
    $str = '12345';
    echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];

// 8
    $num = 12345;
	$str = (string) $num;
    echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];

// 9
    $num = 12345;
    $str = (string) $num;
    echo $str[0] * $str[1] * $str[2] * $str[3] * $str[4];

// 10
    $num = 12345;
    $str = (string) $num;
    for ($i=4; $i >= 0; $i--){
        echo $str[$i];
    }
?>