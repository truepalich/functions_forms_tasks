<?php

//<p>9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba".
// Ввод текста реализовать с помощью формы.</p>



function rotateString($a) {
    /*
    $arr_by_char = array();
    for ($i = 0; $i <= strlen($a); $i++) {
        $arr_by_char[] = $a[$i];
    }
    */

    $arr_by_char = str_split($a);
    krsort($arr_by_char);
    $new_string = implode("", $arr_by_char);

    return print_r($new_string);
}


if (!empty($_POST['text_1'])) {
    rotateString($_POST['text_1']);
}

?>


<form method="post" action="9.php">
  <textarea name="text_1"></textarea>
  <button type="submit">Отправить</button>
</form>
