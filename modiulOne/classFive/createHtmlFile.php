<?php
$fileName = "modiulOne/classFive/index.html";
$content = "!";
file_put_contents($fileName,$content);

$fileName = "modiulOne/classFive/index2.html";
$content = "<h1>Create a html file</h1>";
$file = fopen($fileName,"w");
fwrite($file, $content);
fclose($file);

$fileName = "index.html";
$content = file_get_contents($fileName);
echo $content;