<?php
// dichiaro la variabile stringa
$string="Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum et maiores repudiandae ut commodi saepe quae voluptatum aspernatur dignissimos officiis, cum reiciendis itaque delectus adipisci vitae voluptatibus non ad necessitatibus.";

// creo la variabile lunghezza della string, utilizzando la funzione apposita
$lenString = strlen($string);

// creo la variabile per il recupero del parametro badWords nell´url
$badWord = $_GET["badWord"];

// creo la variabile di censura
$censure = "(***)";

// creo nuova variabile string censurata: sostituzione del valore della variabile badWord con quello della variabile censure nella variabile string
$censuredString = str_replace($badWord, $censure, $string);

// creo la variabile lunghezza della censuredString, utilizzando la funzione apposita
$lencensuredString = strlen($censuredString);
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
    <!-- stampo la stringa -->
    <p><?php echo $string; ?></p>
    <h1>Lunghezza stringa</h1>
    <!-- stampo la lunghezza della stringa -->
    <p><?php echo $lenString; ?></p>
    <hr>
    <h1>Nome stringa</h1>
    <!-- stampo la stringa censurata -->
    <p><?php echo $censuredString; ?></p>
    <h1>Lunghezza stringa</h1>
    <!-- stampo la lunghezza della stringa censurata -->
    <p><?php echo $lencensuredString; ?></p>
</body>
</html>