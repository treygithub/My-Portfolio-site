<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blacklisted..</title>
    <style>
        .pisser{
            margin:auto;
        }
        img {
            position: absolute;
            left: 400px;
            top: 50px;
        }
    </style>
</head>
<body>

<?php
$ip1 = $_SERVER['REMOTE_ADDR'];
$port1 = $_SERVER['REMOTE_PORT'];
$hostname1 = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$text1 = " ip address is: " . $ip1 . " " . "user port: " . $port1 . " " . "user host: " . $hostname1;
$file1 = fopen('blacklistlogged.html', 'a');
fwrite($file1, $text1 . " " . date("F j, Y, g:i a") . "<hr><br/>\n");
fclose($file1);
?>

    <div class="pisser">
        <img src="./images/401.jpg" width="750px" height="600px" title="piss off" alt="unauthorized">
    </div>
</body>
</html>