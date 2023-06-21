<?php

session_start();
$db_sec = array("Cos'e' la one-wayness?",
"game inversion"); 
$db_conf = array("Differenza tra secrecy e OneWayness", 
    "Qualcosa di deterministico è IND-CPA sicuro?",
    "Differenza tra correttezza e sicurezza",
    "Game Ind-cpa","Game Ind-cca",
    "Ind-cpa implica ind-cca?",
    "Ind-cca implica ind-cpa?",
    "Quali sono i 2 problemi di IND-CPA?",
    "Come mitica CCA l'omomorfismo di IND-CPA?",
    "Game IND-CCA",
    "SE - CCA con MAC",
    "Vantaggio Ind-CPA dov'e' nascosto il brute force?",
    "Controesempio OTP-PRF nei confornti IND-CCA e Pi nei confronti di IND-CCA"
);
$db_integ = array("Dare la definizione di funzione hash collision-resistant",
    "Proprietà Hash","Game-collision","Qual e' la particolarità del game delle collisioni?");
$db_Auten = array("Dare la definizione di MAC",
    "Definizione di existential unforgeability undere CMA"); 
$db_AE = array("AE Public key e correttezza", 
    "Problema alla base di RSA e EL Gamal", 
    "FAme Ind-CPA AE e vantaggio",
    "Un AE e' IND-CPA sicuro?",
    "Problema della fattorizzazione e perche' e' difficile", 
    "Cosa c'e' alla base di RSA",
    "Perche' non si considerano gli attacchi passivi in PK",
    "Quale correlazione c'e' tra Sk e Pk",
    "Perche' PKE non e' IND-CPA");
$db_def = array("");
$db_Riduzioni = array("Se lo schema è MAC-UF and Lo schema è IND-CPA sicuro, allora SE è INC-CCA sicuro",
 "Se G e PRG, OTP-PRG e sicuro contro eaves",
 "Se F e PRF, OTP-PRF e IND-CPA sicuro",
 "Sia P uno schema sicuro nel senso di IND-CPA allora P e' sicuro contor multiple encryptions",
 "OTP-PRF ee IND-CPA sicuro, allora OTP-PRF e' anche IND-CPA-ARbitrary len sicuro",
"Qualsiasi SE simmetrico IND-CCA sicuro e' anche IND-CPA sicuro",  
"Sia F PRF allora MAC con PRF e UF-CMA sicuro",
"");

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
            $dbCo = $db_Riduzioni;
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
