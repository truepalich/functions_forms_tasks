<?php

//<p>12. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом,
// что предложения идут в обратном порядке.<br>
//Пример:<br><br>
//Входная строка:  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь.
// А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';<br><br>
//Строка, возвращенная функцией :  'А там хоть трава не расти. А ларчик просто открывался.
// А король-то — голый. А вы друзья как ни садитесь, все в музыканты не годитесь. А воз и ныне там.А Васька слушает да ест.'
//</p>


function generateNewString($a) {
    $arr_src = explode('.', $a);

    $arr_new_one = array();
    foreach ($arr_src as $e) {
        if (empty($e)) {
            //unset($arr_src[$k]);
            array_unshift($arr_new_one, $e);
        } else {
            $arr_new_one[] = $e;
        }
    }

    krsort($arr_new_one);
    $result = implode('.', $arr_new_one);

    return print_r($result);
}


if (!empty($_POST['text_1'])) {
    generateNewString($_POST['text_1']);
}

?>


<form method="post" action="12.php">
  <textarea name="text_1"></textarea>
  <button type="submit">Отправить</button>
</form>
