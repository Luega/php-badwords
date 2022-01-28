<?php
$string="This is the way";
$lenString = strlen($string);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nome stringa</h1>
    <p><?php echo $string; ?></p>
    <h1>Lunghezza stringa</h1>
    <p><?php echo $lenString; ?></p>
</body>
</html>