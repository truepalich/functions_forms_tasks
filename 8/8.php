<?php

//<p>8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
// Все добавленные комментарии выводятся над текстовым полем.
//Реализовать проверку на наличие в тексте запрещенных слов, матов.
// При наличии таких слов - выводить сообщение "Некорректный комментарий". Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.</p>

$is_valid = true;

if (!empty($_POST['text_1'])) {

    $_POST['text_1'] = strip_tags($_POST['text_1'], '<b>');

    $arr_bad_words = array('херня', 'фигня', 'мля');
    $arr_post = explode(' ', $_POST['text_1']);
   
    foreach ($arr_post as $e) {
      foreach ($arr_bad_words as $k) {
        if (strpos($e, $k) === false) {
          $is_valid = true;
        } else {
          $is_valid = false;
          break 2;
        }
      }
    }


    if ($is_valid) {
        addComment($_POST['text_1']);
    }
}


function addComment($a) {
    $file = fopen('text.txt', 'a');

    fwrite($file, '<p>' . $a . '</p>');
    fclose($file);
    return;
}

$comments = file_get_contents('text.txt', true);

?>

<? if(!empty($comments)): ?>
    <?=$comments;?>
<? endif; ?>


<form method="post" action="8.php">
  <textarea name="text_1"></textarea>
  <button type="submit">Добавить комментарий</button>
</form>

<? if(!$is_valid): ?>
    <span style="color: red">Некорректный комментарий</span>
<? endif; ?>

