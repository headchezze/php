<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Lessons</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        

        <form method="GET">
            Первое число <input type="number" name="first">
            <br>
            Второе число <input type="number" name="second">
            <br/>
            Знак операци <input type="text" name="operation">
            <br>
            <input type="submit" value="Submit button">
        </form>

        <?php
            $first = $_GET["first"];
            $second = $_GET["second"];
            $operation = $_GET["operation"];

            mathOperation($first, $second, $operation);

            function mathOperation($first, $second, $operation)
            {
                $first = $_GET["first"];
                $second = $_GET["second"];
                $operation = $_GET["operation"];

                switch($operation)
                {
                    case "+":
                        $result = $first + $second; 
                       echo "Результат<input type=\"text\" name=\"result\" readonly value=\"$result\">";
                       break;
                    case "-":
                        $result = $first - $second; 
                       echo "Результат<input type=\"text\" name=\"result\" readonly value=\"$result\">";
                       break;
                    case "/":
                        $result = $first / $second; 
                       echo "Результат<input type=\"text\" name=\"result\" readonly value=\"$result\">";
                       break;
                     
                    case "*":
                        $result = $first * $second; 
                       echo "Результат<input type=\"text\" name=\"result\" readonly value=\"$result\">";
                       break;
                    default:
                        echo "<span>Такой команды нет </span>";
                        break;
                }
            }
        ?>
    	
    </body>
</html>