<?php
session_start();
$dbLimiti = array("Asintoti", "Maggioranri & Minorati", "Teorema insieme numerico", "Funzioni limitate", "Massimi e minimi relativi", "Risultati dei limiti", "Limiti di funzioni", "Funzioni continue", "grafici di funzioni");
$dbSuccessioni = array("Definizione di successione", "Successione Limitata", "Limiti di successioni", "Teorema unicita del limite", "Teorema di permanenza del segno");
$dbDerivate = "";
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
