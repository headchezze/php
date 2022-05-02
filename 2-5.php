<?php
$i = 0;
do
{
    switch($i)
    {
        case 0:
            $isBigger = " - это ноль";
            break;
        case ($i % 2 == 0):
            $isBigger = " - четное число";  
            break;
        case  ($i % 2 == 1):
            $isBigger = "- нечетное число";
    }
    echo "$i" . "$isBigger" . "<br>";
    $i++;
}while($i < 11);