<?php
$title = "Current time in your time zone";
$header1 = "Current time display";
$header2 = "Time is: ";

function getTime()
{
    date_default_timezone_set('Asia/Yekaterinburg');
	$hour = ""; 
    $minutes = "";

    if (date("H") == 0 || (date("H") >= 5 && date("H")<=20))
    {
        $hour = " часов ";
    }
    elseif ((date("H") >= 2 && date("H")<= 4) || date("H") == 22 || date("H") 
        == 23)
    {
        $hour = " часа ";
    }
    else
    {
        $hour = " час ";
    }
    
    if (date("i") % 10 == 1)
    {
        $minutes = " минута";
    }
    elseif (date("i") % 10 >= 5 || date("i") % 10 == 0 || (date("i") >= 11 && date("i") <= 19))
    {
        $minutes = " минут ";
    }
    elseif (date("i") % 10 >= 2 && date("i") % 10 <= 4)
    {
        $minutes = " минуты";
    }

    return date("H") . $hour . date("i") . $minutes;
}

$currentTime = getTime();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
</head>
<body>
<h1 align = "center"><?=$header1?> </h1>
<h2><?=$header2 . $currentTime?></h2>
</body>
</html>