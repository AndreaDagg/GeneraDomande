<?php

session_start();
$dbAcqui = array("");
$dbMedia = array("");
$dbFileSys = array("");
$dbDerivateII = array("");
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
