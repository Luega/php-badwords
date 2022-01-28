<!-- PHP -->
<?php
// dichiaro la variabile string
$string = "Ho sceso, dandoti il braccio, almeno un milione di scale
e ora che non ci sei è il vuoto ad ogni gradino.
Anche così è stato breve il nostro lungo viaggio.
Il mio dura tuttora, nè più mi occorrono
le coincidenze, le prenotazioni,
le trappole, gli scorni di chi crede
che la realtà sia quella che si vede.
Ho sceso milioni di scale dandoti il braccio
non già perché con quattr’occhi forse si vede di più.
Con te le ho scese perché sapevo che di noi due
le sole vere pupille, sebbene tanto offuscate,
erano le tue.";

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

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid vh-100 d-flex bg-zucchero bg-gradient">
        <div class="row w-75 h-75 m-auto d-flex text-center">
            <!-- STRINGA NON CENSURATA -->
            <div class="col d-flex  flex-column pergamena">
                <h1>TESTO ORIGINALE</h1>
                <!-- stampo la stringa -->
                <p class="my-5"><?php echo $string; ?></p>
                <h4>Lunghezza:</h4>
                <!-- stampo la lunghezza della stringa -->
                <p><?php echo $lenString; ?></p>
            </div>
            <!-- FORM PER SCRIVERE LA PAROLA DA CENSURARE -->
            <div class="col d-flex  flex-column justify-content-center">
                <img class="img-thumbnail" src="./img/censura1-620x350-1.png" alt="censura">
                <!-- creo form per digitare la parola da censurare -->
                <form class=" d-flex flex-column" action="?badWord=">
                     <input class="form-control" type="text" name="badWord" placeholder="Scrivi la parola che vuoi censurare...">
                     <button class="btn btn-outline-warning w-50 mt-3 align-self-center" type="submit">CENSURA</button>
                </form>
            </div>
            <!-- STRINGA CENSURATA -->
            <div class="col d-flex  flex-column pergamena">
                <h1>TESTO CENSURATO</h1>
                <!-- stampo la stringa censurata -->
                <p class="my-5"><?php echo $censuredString; ?></p>
                <h4>Lunghezza:</h4>
                <!-- stampo la lunghezza della stringa censurata -->
                <p><?php echo $lencensuredString; ?></p>
            </div>
        </div>
    </div>
</body>
</html>