<?php

//<p>13. Есть строка $string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня
// груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко
// вишня вишня черешня черешня груша яблоко черешня вишня';<br>
//<br>
//Подсчитайте, сколько раз каждый фрукт встречается в этой строке. Выведите  в виде списка в порядке уменьшения количества:<br><br>
//Пример вывода:<br>
//яблоко – 12<br>
//черешня – 8<br>
//груша – 5<br>
//слива - 3<br>
//</p>


function generateNewString($a) {
    $arr_src = explode(' ', $a);
    $arr_unique = array_unique($arr_src);
    $arr_unique = array_values($arr_unique);

    // Slognie operacii
    for ($i=0; $i < count($arr_unique); $i++) {
        $new_arr[$i] = array();
        foreach ($arr_src as $e) {
            if ($e == $arr_unique[$i]) {
                $new_arr[$i][] = $e;
            }
        }
    }

    // Vivod rezultata
    $result_arr = array();
    foreach ($new_arr as $k) {
        foreach ($k as $v) {
            $result_arr[$k[0]] = sizeof($k);
            break;
        }
    }

    // Sortirovka
    arsort($result_arr);
    foreach ($result_arr as $k => $v) {
        echo $k . ' - ' . $v . '<br/>';
    }


    //echo '<pre>';
    //print_r($arr_src);
    //echo '</pre>';

    //echo '<pre>';
    //print_r($arr_unique);
    //echo '</pre>';
}


if (!empty($_POST['text_1'])) {
    generateNewString($_POST['text_1']);
}

?>


<form method="post" action="13.php">
  <textarea name="text_1">яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня</textarea>
  <button type="submit">Отправить</button>
</form>
