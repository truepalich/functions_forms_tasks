<?php

//<p>7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
// Все добавленные комментарии выводятся над текстовым полем.</p>

if (!empty($_POST['text_1'])) {
    addComment($_POST['text_1']);
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


<form method="post" action="7.php">
  <textarea name="text_1"></textarea>
  <button type="submit">Добавить комментарий</button>
</form>
