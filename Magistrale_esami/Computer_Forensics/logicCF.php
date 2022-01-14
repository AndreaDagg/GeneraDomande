<?php

session_start();
$dbAcqui = array("Quali sono le modalità di acquisizione di un dato?","Quali sono i vantaggi del sequestro?","Quando si ricorre all’isolamento di un dispositivo mobile?","Quali sono le tecniche di isolamento?","Quali sono i requisiti della duplicazione?","Quali sono i metodi di validazione di una duplicazione?","Come assicuriamo la conformità di una duplicazione?","Quali sono le problematiche legate ad un sistema raid?","Quali sono le caratteristiche di una intercettazione?","Quando è possibile utilizzare una porta monitor?","E’ possibile utilizzare nell’intercettazione l’attacco “Man In The Middle”?","Quali sono i protocolli da disabilitare nella creazione di una sonda? Perché?");
$dbMedia = array("Come è organizzato un HD?");
$dbFileSys = array("");
$dbAnalWin = array("");
$dbMobile = array("");
$dbImage = ("");

/* arg -> definisce l'argomento. Se non è specificato lo sceglie casualmente*/
if (isset($_GET['arg'])) {
    $dbNum = $_GET['arg'];
} else {
    $dbNum = rand(0, 5);
}

if (isset($dbNum)) {
    switch ($dbNum) {
        case 0:
            $dbCo = $dbAcqui;
            break;
        case 1:
            $dbCo = $dbMedia;
            break;
        case 2:
            $dbCo = $dbFileSys;
            break;
        /*case 3:
            $dbCo = $dbDerivateII;
            break;*/
        case 3:
            $dbCo = $dbAnalWin;
            break;
        case 4:
            $dbCo = $dbMobile;
            break;
        case 5:
            $dbCo = $dbImage;
            break;
    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainCF.php');
