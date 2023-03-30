<?php
// 1
	$num = 3;
	if ($num > 0 and $num < 5) {
		echo '+';
	} else {
		echo '-';
	}

// 2
$num = 34;
if ($num >= 10 and $num <= 20) {
    echo '+';
} else {
    echo '-';
}

// 3
$num1 = 2;
$num2 = 4;
if ($num1 <= 1 and $num2 >= 3) {
    echo '+';
} else {
    echo '-';
}

/*
    4. -
    5. +
    6. +
    7. +
    8. +
    9. +
    10. -
    11. +
*/

// 12
$num = 3;	
if (($num > 5 and $num < 10) or $num == 20) {
    echo '+';
} else {
    echo '-';
}

// 13
$num = 3;	
if ($num > 5 or ($num > 0 and $num < 3)) {
    echo '+';
} else {
    echo '-';
}

// 14
$num = 3;		
if ($num == 9 or ($num > 10 and $num < 20) or ($num > 20 and $num < 30)) {
    echo '+';
} else {
    echo '-';
}

?>