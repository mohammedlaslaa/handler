<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php

    $filetoread = 'test/test1.txt';

    $read = fopen($filetoread, "r");

    while (!feof($read)) {
        $y = fgets($read, 50);
    };

    fclose($read);

    $writen = fopen($filetoread, "a+");

    fwrite($writen, ' Helloc ! ');

    fclose($writen);

    file_put_contents($filetoread, 'Hey !', FILE_APPEND);

    $page = file_get_contents($filetoread);

    echo $page;

    copy($filetoread, 'test2.txt');

    ?>

</body>

</html>