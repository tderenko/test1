<?php
ini_set('display_errors',true);
include __DIR__.'/init.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <p>
        <input type="file" name="csv">
    </p>
    <p>
        <input type="submit" value="Upload">
    </p>
</form>
</body>
</html>

