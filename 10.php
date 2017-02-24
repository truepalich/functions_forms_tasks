<?php

//<p>10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами.
// Текст должен вводиться с формы.</p>



function countUniqueWords($a) {
    $arr_src = explode(' ', $a);
    $arr_unique = array_unique($arr_src);

    $result = sizeof($arr_unique);
    return print_r($result);
}


if (!empty($_POST['text_1'])) {
    countUniqueWords($_POST['text_1']);
}

?>


<form method="post" action="10.php">
  <textarea name="text_1"></textarea>
  <button type="submit">Отправить</button>
</form>
