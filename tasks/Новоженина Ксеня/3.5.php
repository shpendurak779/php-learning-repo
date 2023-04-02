<?php
// 1
    $arr = ['a', 'b', 'c', 'd', 'e'];

    foreach ($arr as $elem) {
        echo $elem;
    }
// 2
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $sum = 0;
    foreach ($arr as $elem) {
        $sum += $elem;
    }
    echo $sum;

// 3
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $sum = 0;
    $huy = 0;

    foreach ($arr as $elem) {
        $sum += $elem;
    }
    echo $sum . '<br>';
    $result = $sum / count($arr);
    echo $result;

?>