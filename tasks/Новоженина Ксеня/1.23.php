<?php
// 1
    $arr = [1 => 'a','b','c'];
    echo $arr[1] . $arr[2] . $arr[3];
// 2
    $months = [1 => 'январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
    for ($i=1; $i < 13; $i++){
        echo $months[$i] . '<br>';
    }

// 3
    $user = ['name' => 'Вольфганг', 'surname' => 'Герц', 'patronymic'=> 'Францевич'];
    echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'];
// 4
    $date = ['year' => '2023', 'month' => '.03', 'day' => '.30'];
    echo $date['year'] . $date['month'] . $date['day']
?>