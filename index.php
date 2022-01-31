<!-- PHP -->
<?php
// dichiaro la variabile string
$string = "Nell'antica Roma i censori erano quei magistrati incaricati di gestire il censimento e, più tardi, di vigilare sulla condotta morale dei cittadini. Nei secoli la censura, ovvero il termine riferito al loro mandato, ampliò il suo significato a inglobare tutte le azioni di controllo o divieto della libera espressione in tutti i campi della pubblicazione delle idee. Negli anni più bui del Medioevo e della Controriforma, la censura fu una delle funzioni più strumentali dell'Inquisizione.

Col passare del tempo la censura tornò ad assumere, oltre a una funzione religiosa, anche uno scopo politico e militare. I vari governi o le varie istituzioni di potere la estesero a seconda delle epoche non solo a giornali o manifesti ma anche a libri, dipinti, e poi film e altre forme artistiche. Nel corso degli anni le censure riguardarono fatti di portata storica (dal rogo nazista dei libri alla proscrizione di film ritenuti immorali) a altri provvedimenti più minuti (come l'intervento su** alcuni cartoni animati** per bambini o addirittura su alcuni loghi di brand). Oggi la censura assume forme rinnovate, che comprendono il controllo del web ma anche l'involontario bigottismo di certi algoritmi social.";

// creo la variabile lunghezza della string, utilizzando la funzione apposita
$lenString = strlen($string);

// creo la variabile per il recupero del parametro badWords nell´url
$badWord = $_GET["badWord"];

// creo nuova variabile string censurata: sostituzione del valore della variabile badWord con quello della variabile censure nella variabile string
$censuredString = str_replace($badWord, "***", $string);

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
    <div class="container-fluid min-vh-100 p-5 d-flex bg-zucchero bg-gradient">
        <div class="row w-75 h-75 m-auto d-flex text-center">
            <!-- STRINGA NON CENSURATA -->
            <div class="col-12 col-xl-4 d-flex  flex-column pergamena p-3 justify-content-between align-items-center">
                <h1 class="mw-75">TESTO ORIGINALE</h1>
                <!-- stampo la stringa -->
                <p class="p-4"><?php echo $string; ?></p>
                <div class="box">
                    <h4>Lunghezza:</h4>
                    <!-- stampo la lunghezza della stringa -->
                    <p><?php echo $lenString; ?></p>
                </div>
            </div>
            <!-- FORM PER SCRIVERE LA PAROLA DA CENSURARE -->
            <div class="col-12 col-xl-4 my-5 my-xl-0 d-flex  flex-column justify-content-center">
                <img class="img-thumbnail" src="./img/censura1-620x350-1.png" alt="censura">
                <!-- creo form per digitare la parola da censurare -->
                <form class=" d-flex flex-column" action="?badWord=">
                     <input class="form-control" type="text" name="badWord" pattern="[^' ']+" title="Only one word. No space allowed." placeholder="Scrivi la parola che vuoi censurare...">
                     <button class="btn btn-outline-warning mw-50 mt-3 align-self-center" type="submit">CENSURA</button>
                </form>
            </div>
            <!-- STRINGA CENSURATA -->
            <div class="col-12 col-xl-4 d-flex  flex-column pergamena p-3 justify-content-between align-items-center">
                <h1 class="mw-75">TESTO CENSURATO</h1>
                <!-- stampo la stringa censurata -->
                <p class="p-4"><?php echo $censuredString; ?></p>
                <div class="box">
                    <h4>Lunghezza:</h4>
                    <!-- stampo la lunghezza della stringa censurata -->
                    <p><?php echo $lencensuredString; ?></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>