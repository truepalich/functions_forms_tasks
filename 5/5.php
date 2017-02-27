<?php

//<p>5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
//  Директория и искомое слово задаются как параметры функции.</p>

function showFiles($dir, $word) {
    $dir = '../' . $dir;
    $files = scandir($dir);

    // Words in files
    $file_arr_content = array();
    foreach ($files as $k => $v) {
        if ($v[0] != ".") {
            $v = file_get_contents($dir . $v, true);
            $file_arr_content[] = $v;
        } else {
            unset($files[$k]);
        }
    }

    // Src files
    $files = array_values($files);

    // Find keys
    $arr_keys = array();
    foreach ($file_arr_content as $k => $v) {
        if ($v == $word) {
            $arr_keys[] = $k;
        }
    }

    // Result
    $arr_keys_flipped = array_flip($arr_keys);
    $arr_result = array_intersect_key($files, $arr_keys_flipped);
    $result = print_r(implode('<br>', $arr_result));

    return $result;

//    echo '<pre>';
//    print_r($files);
//    echo '</pre>';
//
//    echo '<pre>';
//    print_r($file_arr_content);
//    echo '</pre>';
//
//    echo '<pre>';
//    print_r($arr_keys_flipped);
//    echo '</pre>';
//
//    echo '<pre>';
//    print_r($result);
//    echo '</pre>';
}

showFiles('5/files/', 'world');



