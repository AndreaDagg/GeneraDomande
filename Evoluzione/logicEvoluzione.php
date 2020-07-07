<?php

session_start();
//Numero degli array degli argomenti considerando il proimo come zero
$NumeroArgomenti = 7;

$dbLegacy = Array("Legacy");
$dbMaintenance = Array("Maintenance");
$dbRe_Eng = Array("Re-Eng");
$dbImpact = Array("Imapact");
$dbTraceability = Array("Tracciabilita'");
$dbQuality = Array("Qualita'");
$dbRefactoring = Array("Refactoring");
$dbRegression = Array("Regressione");
/* arg -> definisce l'argomento. Se non è specificato lo sceglie casualmente*/
if (isset($_GET['arg'])) {
    $dbNum = $_GET['arg'];
} else {
    $dbNum = rand(0, $NumeroArgomenti);
}

if (isset($dbNum)) {
    switch ($dbNum) {
        case 0:
            $dbCo = $dbLegacy;
            break;
        case 1:
            $dbCo = $dbMaintenance;
            break;
        case 2:
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
            break;

    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainEvoluzione.php');
