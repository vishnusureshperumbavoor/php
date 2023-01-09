<?php
$filename = 'file.txt';

$text = file_get_contents($filename);
echo $text;

$file = fopen($filename, 'r');
$text = fread($file, filesize($filename));
fclose($file);
echo $text;