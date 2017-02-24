<?php

//<p>1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова,
// которые есть и в первом и во втором поле ввода.
//Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
//</p>


function getCommonWords($a, $b) {
  $pieces_a = explode(" ", $a);
  $pieces_b = explode(" ", $b);

  $result = array_intersect($pieces_a, $pieces_b);
  return print_r($result);
}


if (!empty($_POST['text_1']) && !empty($_POST['text_2'])) {
  getCommonWords($_POST['text_1'], $_POST['text_2']);
}



?>


<form method="post" action="1.php">
  <textarea name="text_1"></textarea>
  <textarea name="text_2"></textarea>
  <button type="submit">Отправить</button>
</form>
