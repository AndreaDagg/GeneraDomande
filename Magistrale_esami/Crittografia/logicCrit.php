<?php

session_start();
$db_sec = array(""); 
$db_conf = array("Differenza tra secrecy e OneWayness", "Qualcosa di deterministico è IND-CPA sicuro?","Differenza tra correttezza e sicurezza", "Game Ind-cpa","Game Ind-cca","Ind-cpa implica ind-cca?","
Ind-cca implica ind-cpa?");
$db_integ = array("Dare la definizione di funzione hash collision-resistant","Proprietà Hash","Game-collision");
$db_Auten = array("Dare la definizione di MAC","Definizione di existential unforgeability undere CMA");
$db_def = array("");

/* arg -> definisce l'argomento. Se non è specificato lo sceglie casualmente*/
if (isset($_GET['arg'])) {
    $dbNum = $_GET['arg'];
} else {
    $dbNum = rand(0, 9);
}

if (isset($dbNum)) {
    switch ($dbNum) {
        case 0:
            $dbCo = $db_sec;
            break;
        case 1:
            $dbCo = $db_conf;
            break;
        case 2:
            $dbCo = $db_integ;
            break;
        /*case 3:
            $dbCo = $dbDerivateII;
            break;*/
        case 3:
            $dbCo = $db_Auten;
            break;
        case 4:
            $dbCo = $db_def;
            break;
        case 5:
            $dbCo = $db_def;
            break;
        case 6:
            $dbCo = $db_def;
            break;
        case 7:
            $dbCo = $db_def;
            break;
        case 8:
            $dbCo = $db_def;
            break;
        case 9:
            $dbCo = $db_def;
            break;
    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainCrit.php');
