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
        <?php
            $languages = [
                'Web-разработка' => ['Java script', 'PHP', 'Type script'],
                'Микроконтроллеры' => ['Rust', 'C', 'Assembler'],
                'Операционные системы' => ['C', 'C++', 'Objective-C']
            ];

            echo "<ul>";
            foreach($languages as $key => $value)
            {
                echo "<li>" . $key . "</li>";
                foreach($value as $key => $value)
                {
                    echo "<ol>" . $value . "</ol>";
                }
            }
            echo "</ul>"
        ?>
    </body>
</html>