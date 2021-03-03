<?php
session_start();
//Numero degli array degli argomenti considerando il proimo come zero
$NumeroArgomenti = 7;
$dbStruttureDati = array("");
$dbGrafi = array("Definizione di Grafo", "Grafo orientato e non orientato", "grafo completo, connesso e componenti", "Rappresentazione di un grafo in memoria", "Grado di un grafo", "Grado di un vertice", "Cammino in un grafo", "Complessità di un grafo", "Grafo sparso e denso", "Grafo Bipartito");
$dbAlberi = array("");
$dbComplAnal = array("");
$dbOrdinamento = array("");
$dbProgDin = array("divide et impera e DP","ZAINO & come ricostruire la soluzione & Alg-C","LCS & risoctruzione soluzione & Alg-C","Memoization","Prog Dinamica");
$dbPNpNpC = array("");
$dbGreedy = array("Greedy","Scheduling Intervalli senza peso","Problema del resto","Zaino Frazionario");

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
        case 2:
            $dbCo = $dbAlberi;
            break;
        case 3:
            $dbCo = $dbComplAnal;
            break;
        case 4:
            $dbCo = $dbOrdinamento;
            break;
        case 5:
            $dbCo = $dbProgDin;
            break;
        case 6:
            $dbCo = $dbPNpNpC;
            break;
        case 7:
            $dbCo = $dbGreedy;
            break;

    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainAlgoritmi.php');
