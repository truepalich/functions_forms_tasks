<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<?php

//<p>11. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом,
// что каждое новое предложение начиняется с большой буквы.<br>
//Пример:<br><br>
//Входная строка: 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь.
// а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';<br><br>
//Строка, возвращенная функцией :  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь.
// А король-то — голый. А ларчик просто открывался.А там хоть трава не расти.';</p>


function generateNewString($a) {

    $arr = explode('.', $a);
    $new_arr = array();

    foreach ($arr as $e) {
        if (strpos($e, ' ')) {
            $e = mb_strtoupper(mb_substr($e, 0, 1)) . mb_substr($e, 1);
        } else {
            $e = mb_strtoupper(mb_substr($e, 0, 2)) . mb_substr($e, 2);
        }

        /*
        for ($i = 0; $i < mb_strlen($e,'UTF-8'); $i++) {
            if ($e[$i] !== " ") {
                $e[$i] = ucfirst_utf8($e[$i]);
                break;
            }
        }
        */

        $new_arr[] = $e;

    }

    /*
    echo '<pre>';
    print_r($arr);
    echo '</pre>';

    echo '<hr>';

    echo '<pre>';
    print_r($new_arr);
    echo '</pre>';
    */

    $result = implode('.', $new_arr);

    return var_dump($result);
}


if (!empty($_POST['text_1'])) {
    generateNewString($_POST['text_1']);
}

?>


<form method="post" action="11.php">
  <textarea name="text_1"></textarea>
  <button type="submit">Отправить</button>
</form>


</body>
</html>
