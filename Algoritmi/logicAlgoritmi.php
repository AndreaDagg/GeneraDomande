<?php
session_start();
//Numero degli array degli argomenti considerando il proimo come zero
$NumeroArgomenti = 1;
$dbStruttureDati = array("");
$dbGrafi = array("Definizione di Grafo", "Grafo orientato e non orientato", "grafo completo e connesso", "Rappresentazione di un grafo in memoria", "Grado di un grafo");


/* arg -> definisce l'argomento. Se non è specificato lo sceglie casualmente*/
if (isset($_GET['arg'])) {
    $dbNum = $_GET['arg'];
} else {
    $dbNum = rand(0, $NumeroArgomenti);
}

if (isset($dbNum)) {
    switch ($dbNum) {
        case 0:
            $dbCo = $dbStruttureDati;
            break;
        case 1:
            $dbCo = $dbGrafi;
            break;

    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainAlgoritmi.php');
