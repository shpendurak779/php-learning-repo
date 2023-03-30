<?php
// 1
	$arr = ['a', 'b', 'c', 'd', 'e'];
    echo count($arr);

// 2
    $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
    echo count($arr);

// 3
    $arr = ['a', 'b', 'c', 'd', 'e'];
    echo $arr[count($arr) - 1];
// 4
    $arr = ['a', 'b', 'c', 'd', 'e'];
    echo $arr[count($arr) - 2];
?>