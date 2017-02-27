<?php

//<<p>3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
// Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.</p>

function deleteWords($n) {
    $file = file_get_contents('text.txt', true);
    $file_arr_content = explode(' ', $file);

    $short_array = array();
    foreach ($file_arr_content as $v){
        if (mb_strlen($v, 'UTF-8') < $n) {
            $short_array[] = $v;
        }
    }

    $new_file_arr_content = implode(' ', $short_array);
    file_put_contents('text.txt', $new_file_arr_content);

    return true;
}


if (!empty($_POST['number'])) {
    deleteWords($_POST['number']);
}


?>


<form method="post" action="3.php">
  <input type="number" name="number" />
  <button type="submit">Отправить</button>
</form>
