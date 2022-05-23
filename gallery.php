<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test title</title>
</head>
<body>
<?php
    date_default_timezone_set('Asia/Yekaterinburg');

    function drawImages() {
        $imageDir = './images';
        $images = scandir($imageDir);

        for ($i = 2; $i < count($images); $i++) {
            $imagePath = $imageDir . DIRECTORY_SEPARATOR . $images[$i];
            echo '<a href=' . $imagePath .'><img src=' . $imagePath . ' width=800px height=600px style="margin: 10px; border:  1px solid black;"></a>';
        }
    }

    function callLog() {
        $logDirectory = __DIR__ . DIRECTORY_SEPARATOR . 'logs';
        $logs = scandir($logDirectory);

        if(!file_exists($logDirectory)) {
            mkdir($logDirectory, 0777, true);
        }

        $logs_count = count($logs) - 2;

        $date = date('c');

        if($logs_count === 0) {
            file_put_contents($logDirectory . DIRECTORY_SEPARATOR . 'log.txt', $date . PHP_EOL, FILE_APPEND);
        } else {
            $lastLog = end($logs);
            $data = explode(PHP_EOL,file_get_contents($logDirectory . DIRECTORY_SEPARATOR . $lastLog));

            if(count($data) - 1 >= 10) {
                $log_number = +preg_replace('/[^0-9]/', '', $lastLog) + 1;
                file_put_contents($logDirectory . DIRECTORY_SEPARATOR . 'log' . $log_number . '.txt', $date . PHP_EOL);
            } else {
                file_put_contents($logDirectory . DIRECTORY_SEPARATOR . $lastLog, $date . PHP_EOL, FILE_APPEND);
            }
        }

        $logsPattern = $logDirectory . DIRECTORY_SEPARATOR . "log[0-9]*.txt";
    }

    drawImages();
    callLog();
?>
</body>
</html>