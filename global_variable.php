<?php
$a=20; //global variable

function  sum()
{
    global $a;
    echo $a;
}

function two()
{
    global $a;
    $a++;
    echo $a;
}


sum();
two();

?>