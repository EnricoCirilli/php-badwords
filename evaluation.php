<?php
$message = $_GET["message"];
echo $message;
$length = strlen($message);
// echo str_replace("pazzia","***","$message");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php $message?></p>
    <p>La lunghezza della stringa è <?php echo $length; ?></p>
    <p><?php echo str_replace("pazzia","***","$message"); ?></p>
    <p> La lunghezza della stringa è <?php echo $length ?></p>
</body>
</html>