<?php
// 1
    $arr = [1, 2, 3, 4, 5];
    foreach ($arr as $elem) {
        if ($elem % 2 != 0) {
            echo $elem;
        }
    }

// 2
    $arr = [2, 5, 9, 15, 1, 4];
    foreach ($arr as $elem) {
        if ($elem > 3 and $elem < 10) {
            echo $elem;
        }
    }

// 3
    $sum = 0;
    $arr = [2, 5, 9, 15, 1, 4, -4, -8, 35, -242, 42, 5, 10,];
    foreach ($arr as $elem) {
        if ($elem >= 0) {
            $sum += $elem;
        }
    }
    echo $sum;

// 4
    $arr = [10, 20, 30, 50, 235, 3000];
    foreach ($arr as $elem) {
        $digit = str_split($elem);
		if ($digit[0] == 1 || $digit[0] == 2 || $digit[0] == 5) {
			echo $elem . '<br>';
		}
	}

// 5
    $arr = [1 => 'Понеделник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресение',];
    foreach ($arr as $key => $elem) {
        if ($key > 5) {
            echo '<b>' . $elem . '</b> <br>';
        }else{
            echo $elem . '<br>';
        }
    }

// 6
    $day = 6;
    $arr = [1 => 'Понеделник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресение',];
    foreach ($arr as $key => $elem) {
		if ($key == 6) {
			echo '<b>' . $elem . '</b> <br>';
		}else{
            echo $elem . '<br>';
        }
	}

?> 