<?php

//<p>4. Написать функцию, которая выводит список файлов в заданной директории.
// Директория задается как параметр функции.</p>

function show_files($directory) {
    $directory = '../' . $directory;
    $files = scandir($directory);
    return print_r($files);
}

show_files('4');