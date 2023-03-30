<?php
// 1
    $arr = [];
    $arr[] = 1;
    $arr[] = 2;
    $arr[] = 3;
    $arr[] = 4;
    $arr[] = 5;
    var_dump($arr);

// 2
    $arr = [1, 2, 3];
    $arr[] = 4;
    $arr[] = 5;
    var_dump($arr);

// 3
    $arr = [];
    $arr['year'] = '2023';
    $arr['month'] = '03';
    $arr['day'] = '30';
    var_dump($arr);
?>