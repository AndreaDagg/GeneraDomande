<?php

session_start();
//Numero degli array degli argomenti considerando il proimo come zero
$NumeroArgomenti = 7;
$dbInformSec = array("Obiettivi Information Security", "Proprieta' sistema informatico sicuro", "Common Attacks", "A cosa serve la crittografia");
$dbAttack = array("Tipi di Attacchi", "Attacchi Passivi", "Attacchi Attivi", "Reply, Modifica ed Injection", "Spoofing / Impersonation Attack (IP Spoofing)", "Flooding Attack", "Session Hijaction","Panoramica ARP", "Arp Poisoning / Spoofing",
    "MAC Flooding(Dos)");
$dbIntroCritt = array("");
$dbCifrari = array("");
$dbH_M_K = array("");
$dbIP_I_P = array("");
$dbCertificate_T_S = array("");
$dbIDS = array("");

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
header('Location: mainSicurezza.php');