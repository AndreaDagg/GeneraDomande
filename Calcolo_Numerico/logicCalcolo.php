<?php
session_start();
//Numero degli array degli argomenti considerando il proimo come zero
$NumeroArgomenti = 1;

$dbNorme = array("Modello Risolubile","Cos'è una Norma e quali sono","Th di esistenza delle norme","Condizionamento e Stabilita'","Calcolo errore e accuratezza di un risultato","Quando e' detto stabile un Algoritmo","Rappresentazione F.P","Quyando si ha owerflow e underflow","Quali tecniche per rappresentare un numero","epsilon macchina","Aritmentica F.P ed errori","Studiare la propagazione dell'errore di round-off");
$dbSistemiLineari = array("");

/* arg -> definisce l'argomento. Se non è specificato lo sceglie casualmente*/
if (isset($_GET['arg'])) {
    $dbNum = $_GET['arg'];
} else {
    $dbNum = rand(0, $NumeroArgomenti);
}

if (isset($dbNum)) {
    switch ($dbNum) {
        case 0:
            $dbCo = $dbNorme;
            break;
        case 1:
            $dbCo = $dbSistemiLineari;
            break;
       /* case 2:
            $dbCo = $dbRe_Eng;
            break;
        case 3:
            $dbCo = $dbImpact;
            break;
        case 4:
            $dbCo = $dbTraceability;
            break;
        case 5:
            $dbCo = $dbQuality;
            break;
        case 6:
            $dbCo = $dbRefactoring;
            break;
        case 7:
            $dbCo = $dbRegression;
            break;*/

    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainCalcolo.php');
