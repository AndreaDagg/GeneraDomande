<?php
session_start();
$dbLimiti = array("Asintoti", "Maggioranti & Minorati", "Teorema insieme numerico", "Funzioni limitate", "Massimi e minimi relativi", "Risultati dei limiti", "Limiti di funzioni", "Funzioni continue", "grafici di funzioni",
    "Teorema di permanenza del segno delle funzioni","Teorema dei valori intemedi","Teorema dell'esistenbza degli zeri","Teorema dell'esistenza dell'inversa di una funzione","Teorema di Weierstrass");
$dbSuccessioni = array("Definizione di successione", "Successione Limitata", "Limiti di successioni", "Teorema unicita del limite",
    "Teorema di permanenza del segno","Grafici delle successioni","Teorema del confronto di successioni", "Teorema Successioni infinitesimali","Teorema del prodotto di una succezzione limitata per una successione infinitesima",
    "Dimostrazione della successione a^n", "Dimostrazione funzione trigonometrica indeterminata", "Disuguaglianza di Bernulli","Successioni Monotone");
$dbDerivate = Array("Definizione di Derivata","Continuita' e derivabilita' di una funzione","Punti di non derivabilita'");
$dbDerivateII = "";
$dbSerie = "";
$dbIntegrali = "";
$dbEqDiff = "";

if (isset($_GET['arg'])) {
    $dbNum = $_GET['arg'];
} else {
    $dbNum = rand(0, 1);
}

if(isset($dbNum)){
    switch ($dbNum) {
        case 0:
            $dbCo = $dbLimiti;
            break;
        case 1:
            $dbCo = $dbSuccessioni;
            break;
        case 2:
            $dbCo = $dbDerivate;
            break;
        case 3:
            $dbCo = $dbDerivateII;
            break;
        case 4:
            $dbCo = $dbSerie;
            break;
        case 5:
            $dbCo = $dbIntegrali;
            break;
        case 6:
            $dbCo = $dbEqDiff;
            break;
    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: main.php');
