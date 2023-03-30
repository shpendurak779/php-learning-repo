<?php
    // 1
    $a = [1, 2, 3, 4, 5];
    echo $a;
    var_dump($a);

    // 2
    $arr = ['a', 'b', 'c'];
    echo $arr[0] . $arr[1] . $arr[2];

    // 3
    $arr = ['a', 'b', 'c', 'd'];
    for ($i = 0; $i < 4; $i++){
        echo $arr[$i];
        if ($i < 3){
            echo '+';
        };
    };

    // 4
    $arr = [1, 2, 3];
    echo $arr[0]+$arr[1]+$arr[2];

    // 5
    $arr = [2, 5, 3, 9];
    $result = $arr[0]*$arr[1] + $arr[2]*$arr[3];
    echo $result;
?>