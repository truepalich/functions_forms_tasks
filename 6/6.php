<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<?php

//<p>6. Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.</p>

if (!empty($_FILES)) {
  putFilesToFolder($_FILES);
}

function putFilesToFolder($a) {
  foreach ($_FILES["pictures"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
      $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
      $name = basename($_FILES["pictures"]["name"][$key]);
      move_uploaded_file($tmp_name, "gallery/$name");
    }
  }
}

function show_files($directory) {
  global $files;
  $directory = '../' . $directory;
  $files = scandir($directory);
  
  foreach ($files as $k => $v) {
    if ($v[0] == ".") {
        unset($files[$k]);            
    }
  }
  
  return $files;
}

function site_img($name) {
  $str = 'http://' . $_SERVER['HTTP_HOST'] . '/' . DIR_IMG . $name;
  return $str;
}

define ('DIR_IMG', '6/gallery/');
show_files(DIR_IMG);

?>


<form method="post" action="6.php" enctype="multipart/form-data">
  <fieldset>
    <legend>Поля для изображений:</legend>
    <input type="file" name="pictures[]" />
    <div></div>
    <input type="file" name="pictures[]" />
    <div></div>
    <input type="file" name="pictures[]" />
  </fieldset>
  <button type="submit">Отправить</button>
</form>




<? if (!empty($files)): ?>
  <table style="margin-top: 30px;">
    <tr>
      <? foreach ($files as $f): ?>
        <td><img style="width: 100px; height: auto;" src="<?=site_img($f);?>" /></td>
      <? endforeach; ?>
    </tr>
  </table>
<? endif; ?>




</body>
</html>
