<?php

session_start();
//Numero degli array degli argomenti considerando il proimo come zero
$NumeroArgomenti = 7;

$dbLegacy = Array("Casa e' un Legacy Systems?","Cosa significa Business Critical?","Perche' e' rischioso fare lo shutting down di un L.Sys.?","Componenti di un L.Sys.","Legacy Dilemma","Strategie del Legacy Dilemma","Business Value System quality","Forward enginering");
$dbMaintenance = Array("Quali tipi di manutenzione esistono?","Mauntenzione correttiva","Manutenzione evolutiva","Manutenzione adattiva","Modello che descrive la manutenzione","Costi della manutenzione","Leggi di Lehman","Strategie di cambiamento","Processo di manutenzione","Change request","Impact analysis","Maintenance Prediction");
$dbRe_Eng = Array("Obiettivi del Re-Eng","Perche' fare Re-Eng","Dove fare Re-eng","Processo di Re-Eng","Surce code traslation","Reverse enginering","Restructoring","Data-Re-Eng","Costi/Vantaggi e Svantaggi del Re-Eng");
$dbImpact = Array("Cos'e' Imapact Analysis","Processo dell'Imp.Analysis","Quali sono i set dell'impact anbalysis","Come verifico la stima dell'Impact Analysis");
$dbTraceability = Array("Cosa fa la Tracciabilita'","Quali sono i diversi tipi di Trac.","Come recupero dei link di Trac.","Information Retrival","Processo di recupero dei link di tracciabilita'","Matrice dei documenti","Vector Space Model","Ranked List e come la taglio","Valutazioen del recupero dei link IR");
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
