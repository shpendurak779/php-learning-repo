<?php
// 1
	$test = true;
	
	if ($test === true) {
		echo '+';
	} else {
		echo '-';
	}

// 2
    $test = true;
        
    if ($test === false) {
        echo '+';
    } else {
        echo '-';
    }

/*
    3. +
    4. -
    5. -
    6. -
    7. +
    8. скажет что еррор

*/


// 9
    $test = true;
        
    if ($test) {
        echo '+';
    } else {
        echo '-';
    }

// 10
    $test = true;
	
	if (!$test) {
		echo '+';
	} else {
		echo '-';
	}

// 11
    $test = true;
	
	if (!$test) {
		echo '+';
	} else {
		echo '-';
	}

// 12
    $test = true;
	
	if ($test) {
		echo '+';
	} else {
		echo '-';
	}

/*
    13. +
    14. +
    15. -
    16. еррор
    17. -
    18. -
    19. по факту должен -, но выведет ошибку
    20. -
    21. -
    22. +
*/
?>