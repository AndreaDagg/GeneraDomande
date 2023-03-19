<?php

session_start();
$dbTESTING = array(
    "Che tipo di attività è il testing e da cosa è composto",
    "da quando si può iniziare a pensare al testing e perché ",
    "Quali sono le risorse del testing e chi svolge le prime attività di testing",
    "Cos'e'un Test Case o caso di test",
    "Cos'e' precondition",
    "cos'e' un input e com'e' importante sceglierlo",
    "Test suite e perché definirla",
    "Come dimostriamo la correttezza di un programma e la presenza di difetti, Dijkstra",
    "System Version",
    "Test Stub e Drive",
    "Gestione deio fallimenti - Fault handling"
);
$dbBLACKandWHITE = array();
/* arg -> definisce l'argomento. Se non è specificato lo sceglie casualmente*/
if (isset($_GET['arg'])) {
    $dbNum = $_GET['arg'];
} else {
    $dbNum = rand(0, 3);
}

if (isset($dbNum)) {
    switch ($dbNum) {
        case 0:
            $dbCo = $dbTESTING;
            break;
        case 1:
            $dbCo = $dbBLACKandWHITE;
            break;
        case 2:
            $dbCo = $dbDatoPersonale;
            break;
        /*case 3:
            $dbCo = $dbDerivateII;
            break;*/
        case 3:
            $dbCo = $dbCookieAndData;
            break;
        case 4:
            $dbCo = $dbMobile;
            break;
        case 5:
            $dbCo = $dbImage;
            break;
        case 6:
            $dbCo = $dbIdeReati;
            break;
        case 7:
            $dbCo = $dbCarte;
            break;
    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainTS.php');
