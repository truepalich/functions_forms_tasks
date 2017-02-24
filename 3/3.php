<?php

//<<p>3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
// Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.</p>




function deleteWords($n) {
    $file = file_get_contents('text.txt', true);
    $file = mb_convert_encoding($file, 'HTML-ENTITIES', "UTF-8");


    //print_r($file);
    //die('ss');

    $file_arr_content = explode(' ', $file);



    $short_array = array();
    foreach ($file_arr_content as $v){

        //echo $v . ': ' . mb_strlen($v, 'UTF-8') . '<br>';

        if (strlen($v) < $n) {

            $short_array[] = $v;
        }
    }


    //print_r($short_array);
    //die('ss');


    $new_file_arr_content = implode(' ', $short_array);


    $new_file_arr_content = mb_convert_encoding($new_file_arr_content, 'HTML-ENTITIES', "UTF-8");


    file_put_contents('text.txt', $new_file_arr_content);
    //$f = fopen('text.txt', 'w');
    //fwrite($f, $new_file_arr_content);
    //fclose($f);

    return;
}


if (!empty($_POST['number'])) {
    deleteWords($_POST['number']);
}


?>


<form method="post" action="3.php">
  <input type="number" name="number" />
  <button type="submit">Отправить</button>
</form>
