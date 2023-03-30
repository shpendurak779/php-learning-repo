<?php
// 1
    $min = 10;
    if ($min >= 0 and $min < 20) {
        echo '1 треть';
    }
    if ($min >= 20 and $min < 40) {
        echo '2 треть';
    }
    if ($min >= 40 and $min <= 59) {
        echo '3 треть';
    }


// 2
    $arr = [1, 2, 3];	
    if (count($arr) == 3) {
        echo $arr[0]+$arr[1]+$arr[2];
    }

// 3
    $a = 10;

    if ($a % $b == 0) {
        echo 'чет';
    } else {
        echo 'нечет';
    }

// 4
    $a = 10;
    if ($a % 3 == 0) {
        echo 'делится';
    } else {
        echo 'не делится';
    }
?>