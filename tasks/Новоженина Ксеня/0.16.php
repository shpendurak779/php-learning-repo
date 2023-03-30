<?php
// 1
	$test = '12345';
    var_dump((int)$test);

// 2
    $test = '12.345';
    var_dump((float)$test);

// 3
    $test = '12.345';
    var_dump((int)$test);

// 4
    $test = 12345;
    var_dump((string)$test);

// 5
    $test = 12.345;
    var_dump((string)$test);
?>