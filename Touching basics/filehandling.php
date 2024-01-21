<?php
$file = 'extras/users.txt';

if(file_exists($file)){
    // echo readfile($file);
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else{
    $handle = fopen($file, 'w');
    $contents = ' ligma ' . PHP_EOL . ' stigma ' . PHP_EOL .' sugma ' . PHP_EOL . 'sawcon';
    fwrite($handle, $contents);
    fclose($handle);
}