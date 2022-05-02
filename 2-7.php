<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Lessons</title>
        <link rel="author" href="humans.txt">
    </head>
    <body> 
        <form  method="GET">
            Enter your name to test how php works with user input<input type="text" name="name">
            <br>
            <input type="submit" value="Submit button">
        </form>
    	<?php

        function translit()
        {
           $name = $_GET["name"];
            $cirilicLetters = array(
                "а" => "a", 
                "б" => "b", 
                "в" => "v", 
                "г" => "g", 
                "д" => "d", 
                "е" => "e", 
                "ё" => "yo",
                "ж" => "zh", 
                "з" => "z", 
                "и" => "i", 
                "й" => "y", 
                "к" => "k", 
                "л" => "l", 
                "м" => "m",
                "н" => "n", 
                "о" => "o", 
                "п" => "p", 
                "р" => "r", 
                "с" => "s", 
                "т" => "t", 
                "у" => "u",
                "ф" => "f", 
                "х" => "h", 
                "ц" => "ts", 
                "ч" => "ch", 
                "ш" => "sh", 
                "щ" => "s'h", 
                "ъ" => "",
                "ы" => "i", 
                "ь" => "'", 
                "э" => "e", 
                "ю" => "yu", 
                "я" => "ya", 
                " " => " ",
                "А" => "A", 
                "Б" => "B", 
                "В" => "V", 
                "Г" => "G", 
                "Д" => "D", 
                "Е" => "E", 
                "Е" => "Yo",
                "Ж" => "Yh", 
                "З" => "Z", 
                "И" => "I", 
                "Й" => "Y", 
                "К" => "K", 
                "Л" => "L", 
                "М" => "M",
                "Н" => "N", 
                "О" => "O", 
                "П" => "P", 
                "Р" => "R", 
                "С" => "S", 
                "Т" => "T", 
                "У" => "U",
                "Ф" => "F", 
                "Х" => "H", 
                "Ц" => "Ts", 
                "Ч" => "Ch", 
                "Ш" => "Sh", 
                "Щ" => "S'h", 
                "Ъ" => "",
                "Ы" => "I", 
                "Ь" => "'", 
                "Э" => "E", 
                "Ю" => "Yu", 
                "Я" => "Ya"
            );
 
            $word = strtr($name, $cirilicLetters);
            echo "$word";
        } 
        translit();
        ?>  		
    </body>
</html>