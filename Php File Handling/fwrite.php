<?php

$file=fopen("data2.txt","w");
fwrite($file,"This is written data");
fclose($file);

$file2=fopen("data2.txt","r");

$data=fread($file2,filesize("data2.txt"));

echo $data;

?>