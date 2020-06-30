<?php

session_start();
//Numero degli array degli argomenti considerando il proimo come zero
$NumeroArgomenti = 0;

/* arg -> definisce l'argomento. Se non è specificato lo sceglie casualmente*/
if (isset($_GET['arg'])) {
    $dbNum = $_GET['arg'];
} else {
    $dbNum = rand(0, $NumeroArgomenti);
}

if (isset($dbNum)) {
    switch ($dbNum) {
        case 0:
            $dbCo = $dbInformSec;
            break;
        case 1:
            $dbCo = $dbAttack;
            break;
        case 2:
            $dbCo = $dbIntroCritt;
            break;
        case 3:
            $dbCo = $dbCifrari;
            break;
        case 4:
            $dbCo = $dbH_M_K;
            break;
        case 5:
            $dbCo = $dbIP_I_P;
            break;
        case 6:
            $dbCo = $dbCertificate_T_S;
            break;
        case 7:
            $dbCo = $dbIDS;
            break;

    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainEvoluzione.php');
