<?php
session_start();

$dbUNIX = array(

);

$dbBUFFER = array(

);

$dbCROSS = array(

);

$dbSQL = array(

);

$dbTHREAT = array(

);

$dbINTRO = array(

);


/* arg -> definisce l'argomento. Se non e' specificato lo sceglie casualmente*/
if (isset($_GET['arg'])) {
    $dbNum = $_GET['arg'];
} else {
    $dbNum = rand(0, 3);
}

if (isset($dbNum)) {
    switch ($dbNum) {
        case 0:
            $dbCo = $dbUNIX;
            break;
        case 1:
            $dbCo = $dbBUFFER;
            break;
        case 2:
            $dbCo = $dbCROSS;
            break;
        case 3:
            $dbCo = $dbSQL;
            break;
        case 4:
            $dbCo = $dbTHREAT;
            break;
        case 5:
            $dbCo = $dbINTRO;
            break;
    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainS.php');
